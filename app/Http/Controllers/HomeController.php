<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration as Registration;
use Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    
    public function index()
    {
         return view('welcome');
    }

    public function store(Request $request)
    {
        $messages = [
       'digits_between' => 'The :attribute must be :max digits.',
        ];
        $v = Validator::make($request->all(), [
        'roll1'         => 'required|integer|digits_between:9,9',
        'contact1'      => 'required|integer|digits_between:10,10',
        'roll2'         => 'required_with:contact2|integer|digits_between:9,9',
        'contact2'      => 'required_with:roll2|integer|digits_between:10,10',
        'roll3'         => 'required_with:contact3|integer|digits_between:9,9',
        'contact3'      => 'required_with:roll3|integer|digits_between:10,10',
        'roll4'         => 'required_with:contact4|integer|digits_between:9,9',
        'contact4'      => 'required_with:roll4|integer|digits_between:10,10',
        'abstract'       => 'required|max:2500',
        'file'           => 'max:10240',
        ],$messages);
    //redirect to registration page with errors if there is any
        if ($v->fails())
        {
            return redirect(action('HomeController@index'))->withErrors($v->errors())->withInput();
        }

        $registration                       = new Registration();
        $registration->roll_number_1        = $request->roll1;
        $registration->contact_number_1     = $request->contact1;
        $registration->roll_number_2        = $request->roll2;
        $registration->contact_number_2     = $request->contact2;
        $registration->roll_number_3        = $request->roll3;
        $registration->contact_number_3     = $request->contact3;
        $registration->roll_number_4        = $request->roll4;
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

    
}
