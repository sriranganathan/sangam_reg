<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

//User Login
Route::get('user_login','HomeController@login');
Route::post('user_login','HomeController@check_login');
// Phase 2 Login(Selected Candidates only)
Route::get('/phase2/login','HomeController@phaseTwoLogin');
Route::post('/phase2/login','HomeController@checkPhaseTwoLogin');

Route::group(['middleware'=>'UserAuth'],function(){
	Route::get('logout','AdminController@logout');
	
	// Phase 1
	Route::get('/register','HomeController@register');
	// Route::post('/getname','HomeController@getname');

	// Route::post('submit','HomeController@store');
	
	// Phase 2 (Enable these routes after phase 1 is completed and selected candidates are marked in DB)
	Route::get('/phase2/register','HomeController@phaseTwoView');
	Route::post('/phase2/register','HomeController@phaseTwo');
});



//Admin Login
Route::get('login','AdminController@login');
Route::post('login','AdminController@check_login');

Route::group(['middleware' => 'AdminAuth'], function () {
	Route::get('view_registration',"AdminController@view");
	Route::get('registration',"AdminController@registration");
	Route::get('download',"AdminController@download");
});
