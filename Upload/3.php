<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\registration as Registration;
use Mail;

class AdminController extends Controller
{
    public function view()
    {
        $registrations = registration::paginate(10);
        return view('view', compact('registrations'));
    }

    public function show_registration(Request $request)
    {
        $id = $request->get('id');

        $registration = Registration::find($id);

        echo(json_encode($registration));   
    }
    public function login()
    {
        if(Session::has('user_name'))
            return Redirect::to('/view_registration');
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
                Session::put('user_name',$result[0]->admin_name);
                return Redirect::to('/view_registration');
            }
            else
            {
                return Redirect::to('login')->with('message', 'Incorrect Username or Password');
            }
    }

    public function logout()
    {
        Session::flush();
       return Redirect::to('/view_registration');
    }

    public function email(Request $request)
    {
        $id = $request->get('id');
        $registration = Registration::find($id);

        Mail::send('email', ['registrant' => $registration->name], function ($m) use ($registration) {
            $m->to($registration->email,$registration->name)->subject('Skill Enhancement Programme Registration Confirmed !!');
        });
    }
}
