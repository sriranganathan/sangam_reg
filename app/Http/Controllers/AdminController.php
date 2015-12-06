<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;;
use Illuminate\Support\Facades\DB;
use App\Registration as Registration;

class AdminController extends Controller
{
    public function login()
    {
        if(Session::has('user_name'))
            return Redirect::to(action('AdminController@view'));
        else
            return view('login');
    }
    public function check_login(Request $request)
    {
            $username=$request->get('username'); 
            $password=$request->get('password');
            $password = sha1($password);
            $result = DB::select('select * from admin where admin_handle = ? and admin_password = ?', [$username,$password]);
            
            if(count($result)>0)
            {
                Session::put('user_name',$result[0]->admin_handle);
                return Redirect::to(action('AdminController@view'));
            }
            else
            {
                return Redirect::to(action('AdminController@login'))->with('message', 'Incorrect Username or Password');
            }
    }

    public function logout()
    {
       Session::flush();
       return Redirect::to(action('HomeController@index'));
    }

    public function view()
    {
        $registrations = registration::paginate(50);
	$registrations->setPath('view_registration');
        return view('view', compact('registrations'));
    }

    public function registration(Request $request)
    {
        $id = $request->id;
        $registration = Registration::find($id);
        return view('details',$registration);
    }

    public function download(Request $request)
    {
        $id = $request->id;
        $registration = Registration::find($id);
        $pathToFile = base_path() . '/Upload/' . "{$registration->file_name}";
        return response()->download($pathToFile);

    }

}
