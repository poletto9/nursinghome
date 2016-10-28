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

Route::get('/','Website\HomeController@index');
Route::get('service','Website\HomeController@clinic');
Route::get('care-giver','Website\HomeController@care_giver');
Route::get('rooms','Website\HomeController@rooms');
Route::get('facility','Website\HomeController@facility');
Route::get('contact-us','Website\HomeController@contact');
Route::get('contact-request','Website\HomeController@contact_request');
Route::get('thank-you-for-contact','Website\HomeController@thank_contact');

/* Article */
Route::get('article/01','Website\HomeController@article_01');

/* Multi Language Page */
Route::get('change/{locale}','Website\HomeController@change_language');