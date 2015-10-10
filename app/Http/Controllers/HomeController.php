<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration as Registration;
use Validator;
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
         return view('register');
    }

    public function store(Request $request)
    {
        $messages = [
       'digits_between' => 'The :attribute must be :max digits.',
        ];
        $v = Validator::make($request->all(), [
        'roll1'         => 'required|integer|digits_between:9,9',
        'contact1'      => 'required|integer|digits_between:10,10',
        'name1'          => 'required|string|max:255',
        'roll2'         => 'required_with_all:contact2,name2|integer|digits_between:9,9',
        'name2'         => 'required_with_all:contact2,roll2|string|max:255',
        'contact2'      => 'required_with_all:roll2,name2|integer|digits_between:10,10',
        'roll3'         => 'required_with_all:contact3,name3|integer|digits_between:9,9',
        'name3'         => 'required_with_all:contact3,roll3|string|max:255',
        'contact3'      => 'required_with_all:roll3,name3|integer|digits_between:10,10',
        'roll4'         => 'required_with_all:contact4,name4|integer|digits_between:9,9',
        'name4'         => 'required_with_all:contact4,roll4|string|max:255',
        'contact4'      => 'required_with_all:roll4,name4|integer|digits_between:10,10',
        'abstract'      => 'required|max:2500',
        'file'          => 'max:10240',
        ],$messages);
    //redirect to registration page with errors if there is any
        if ($v->fails())
        {
            return redirect(action('HomeController@register'))->withErrors($v->errors())->withInput();
        }

        $registration                       = new Registration();
        $registration->roll_number_1        = $request->roll1;
        $registration->name_1               = $request->name1;
        $registration->contact_number_1     = $request->contact1;
        $registration->roll_number_2        = $request->roll2;
        $registration->name_2               = $request->name2;
        $registration->contact_number_2     = $request->contact2;
        $registration->roll_number_3        = $request->roll3;
        $registration->name_3               = $request->name3;
        $registration->contact_number_3     = $request->contact3;
        $registration->roll_number_4        = $request->roll4;
        $registration->name_4               = $request->name4;
        $registration->contact_number_4     = $request->contact4;
        $registration->abstract             = $request->abstract;

        $registration->save();
        if($request->file)
        {
            $destinationPath = base_path() . '/Upload/'; // upload path
            $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
            $fileName = $registration->id .'.'.$extension; // renameing image
            $request->file('file')->move($destinationPath, $fileName);
            $registration->file_name = $fileName;
            $registration->save();
        }
        return view('success');
        
    }

    public function login()
    {
        if(Session::has('roll_number'))
            return Redirect::to(action('HomeController@register'));
        else
            return view('user_login');
    }
    public function check_login(Request $request)
    {
            $username=$request->get('roll_number'); 
            $password=$request->get('password');
            $shellcmd = "python2 nitt_imap_login.py ".$username." ".$password;
            $imap = shell_exec($shellcmd);

            if($imap)
            {
                Session::put('roll_number',$username);
                return Redirect::to(action('HomeController@register'));
            }
            else
            {
                return Redirect::to(action('HomeController@login'))->with('message', 'Incorrect Roll Number or Password');
            }
    }

    public function getname(Request $request)
    {

        $rollno = $request->get('roll_number');

        $ldapconn = ldap_connect("10.0.0.38")
            or dd(0);

        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
    
        $ldapbind = @ldap_bind($ldapconn,env('LDAP_USERNAME'),env('LDAP_PASSWORD'));
        
        if ($ldapbind)
        {
            $sr=ldap_search($ldapconn,"DC=octa,DC=edu", "cn=".$rollno);
            $ldaparr = ldap_get_entries($ldapconn,$sr); 

            if($ldaparr['count']==0)
                return 1;
            $name = $ldaparr[0]['displayname'][0];  
            return $name;       
        } 
        else 
        {
            return 0;
        }


    }

    
}
