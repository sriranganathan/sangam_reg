<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration as Registration;

use Exception;
use Validator;
use Log;
use DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class HomeController extends Controller
{

	public function index()
	{
		return view('welcome');
	}

	public function register()
	{
		// return view('register');
		return redirect(url('/'));
	}

	public function store(Request $request)
	{
		abort(400);
		
		$messages = [
			'digits_between' => 'The :attribute must be :max digits.',
		];

		$v = Validator::make(
			$request->all(), [
			'project_name'     => 'required|string',
			'project_category' => 'required|in:c,nc',    
			'roll1'         => 'required|integer|digits_between:9,9',
			'contact1'      => 'required|integer|digits_between:10,10',
			'name1'         => 'required|string|max:255',
			'email1'        => 'required|email',
			'roll2'         => 'required_with_all:contact2,name2,email2|integer|digits_between:9,9',
			'name2'         => 'required_with_all:contact2,roll2,email2|string|max:255',
			'contact2'      => 'required_with_all:roll2,name2,email2|integer|digits_between:10,10',
			'email2'        => 'required_with_all:roll2,name2,contact2|email',
			'roll3'         => 'required_with_all:contact3,name3,email3|integer|digits_between:9,9',
			'name3'         => 'required_with_all:contact3,roll3,email3|string|max:255',
			'contact3'      => 'required_with_all:roll3,name3,email3|integer|digits_between:10,10',
			'email3'        => 'required_with_all:roll3,name3,contact3|email',
			'roll4'         => 'required_with_all:contact4,name4,email4|integer|digits_between:9,9',
			'name4'         => 'required_with_all:contact4,roll4,email4|string|max:255',
			'contact4'      => 'required_with_all:roll4,name4,email4|integer|digits_between:10,10',
			'email4'        => 'required_with_all:roll4,name4,contact4|email',
			'roll5'         => 'required_with_all:contact5,name5,email5|integer|digits_between:9,9',
			'name5'         => 'required_with_all:contact5,roll5,email5|string|max:255',
			'contact5'      => 'required_with_all:roll5,name5,email5|integer|digits_between:10,10',
			'email5'        => 'required_with_all:roll5,name5,contact5|email',
	
			'file'          => 'required|max:10240|mimes:pdf',
			], $messages
		);
		//redirect to registration page with errors if there is any
		if ($v->fails()) {
			return redirect(action('HomeController@register'))->withErrors($v->errors())->withInput();
		}
		try
		{
			DB::beginTransaction();
			$registration                       = new Registration();
			$registration->roll_number_1        = $request->roll1;
			$registration->name_1               = $request->name1;
			$registration->contact_number_1     = $request->contact1;
			$registration->email_1              = $request->email1;  
			$registration->roll_number_2        = $request->roll2;
			$registration->name_2               = $request->name2;
			$registration->contact_number_2     = $request->contact2;
			$registration->email_2              = $request->email2;
			$registration->roll_number_3        = $request->roll3;
			$registration->name_3               = $request->name3;
			$registration->contact_number_3     = $request->contact3;
			$registration->email_3              = $request->email3;
			$registration->roll_number_4        = $request->roll4;
			$registration->name_4               = $request->name4;
			$registration->contact_number_4     = $request->contact4;
			$registration->email_4              = $request->email4;
			$registration->roll_number_5        = $request->roll5;
			$registration->name_5               = $request->name5;
			$registration->contact_number_5     = $request->contact5;
			$registration->email_5              = $request->email5;

			$registration->project_name = $request->project_name;
			$registration->project_category = $request->project_category;    
			$registration->save();    


			$destinationPath = base_path() . '/Upload/'; // upload path
			$extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
			$fileName = $registration->id .'.'.$extension; // renameing image
			$request->file('file')->move($destinationPath, $fileName);
			$registration->file_name = $request->file('file')->getClientOriginalName();
			$registration->save();
			DB::commit();    
			return view('success');
		}
 
		catch(Exception $e) {
			DB::rollBack();
			Log::error($e);
			$validator->errors()->add('Unable to register');
			return redirect(action('HomeController@store'))->withErrors($v->errors())->withInput();
		}       
	}

	public function phaseTwoView()
	{
		$roll_no = Session::get('roll_number');

		$team = Registration::where(['roll_number_1'=>$roll_no,'phase2'=>1])->first();
		if($team) {
			return view('phase2_register',['project_name'=>$team->project_name,'project_category'=>$team->project_category,'name'=>$team->name_1,'email'=>$team->email_1,'roll'=>$team->roll_number_1]);
		}
		return redirect(url('/phase2/login'));
	}

	public function phaseTwo(Request $request)
	{
		$validator = Validator::make($request->all(),[
			'video_link'   => 'required|url',
			'presentation' => 'required|max:15360|mimes:pdf,ppt,pptx'
		]);

		if($validator->fails())
		{
			Log::error('Unable to submit presentation');
			return back()->withErrors($validator);
		}

		try
		{
			DB::beginTransaction();

			$roll_no = Session::get('roll_number');

			$team = Registration::where(['roll_number_1'=>$roll_no,'phase2'=>1])->first();
			
			if(!$team) {
				Log::error('Unable to submit presentation');
				return back()->with('error','Invalid ID');
			}

			$video_link = $request->input('video_link'); 

			$destinationPath = base_path() . '/Upload/'; // upload path
			$extension = $request->file('presentation')->getClientOriginalExtension(); // getting file extension
			$fileName = "phase2_".$team->id.'.'.$extension; // renaming image
			$request->file('presentation')->move($destinationPath, $fileName);
			$team->presentation = $request->file('presentation')->getClientOriginalName();
			$team->video_link = $video_link;
			$team->save();

			DB::commit();
			Log::info("Presentation submitted successfully by $team->id");
			return view('phase2_success');
		}
		catch(Exception $e)
		{
			DB::rollBack();
			Log::error('Unable to submit abstract',['error'=>$e]);
			abort(500);
		}
	}

	public function login()
	{
		if(Session::has('roll_number')) {
			return Redirect::to(action('HomeController@register'));
		}
		return view('user_login');
	}

	public function check_login(Request $request)
	{
		$username=$request->get('roll_number'); 
		$password=$request->get('password');
		$shellcmd = "python2 nitt_imap_login.py ".$username." ".$password;
		$imap = shell_exec($shellcmd);
		if($imap[0]) {
			Session::put('roll_number', $username);
			return Redirect::to(action('HomeController@register'));
		}
		return Redirect::to(action('HomeController@login'))->with('message', 'Incorrect Roll Number or Password');
	}

	public function phaseTwoLogin()
	{
		if(Session::has('roll_number')) {
			return Redirect::to(action('HomeController@phaseTwoView'));
		}
		return view('phase2_login');
	}

	public function checkPhaseTwoLogin(Request $request)
	{
		$username=$request->get('roll_number'); 
		$password=$request->get('password');
	
		$isSelected = Registration::where(['roll_number_1'=>$username,'phase2'=>1])->count();
	
		if($isSelected==1) {
			$shellcmd = "python2 nitt_imap_login.py ".$username." ".$password;
			$imap = shell_exec($shellcmd);
			if($imap[0]) {
				Session::put('roll_number', $username);
				return Redirect::to(action('HomeController@phaseTwoView'));
			}
		}
		return Redirect::to(action('HomeController@login'))->with('message', 'Only Team Leaders of Selected Teams can login');
	}

	public function getname(Request $request)
	{

		$rollno = $request->get('roll_number');

		$ldapconn = ldap_connect("10.0.0.38") or dd(0);

		ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
	
		$ldapbind = @ldap_bind($ldapconn, env('LDAP_USERNAME'), env('LDAP_PASSWORD'));
		
		if ($ldapbind) {
			$sr=ldap_search($ldapconn, "DC=octa,DC=edu", "cn=".$rollno);
			$ldaparr = ldap_get_entries($ldapconn, $sr); 

			if($ldaparr['count']==0) {
				return 1;
			}
			$name = $ldaparr[0]['displayname'][0];  
			return $name;       
		} 
		else 
		{
			return 0;
		}
	}
}
