<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//View routing

// Route::get('/', function () {
//     return view('HomePage');
// });

// Route::get('/About', function() {
//     return view('AboutPage');
// });

// Route::get('/Contact', function(){
//     return view('ContactPage');
// });

//Controller Routing

Route::get('/', 'App\Http\Controllers\SiteController@Home');
Route::get('/About', 'App\Http\Controllers\SiteController@About');
Route::get('/Contact', 'App\Http\Controllers\SiteController@Contact');
Route::get('/Name/{firstname}/{middlename}/{lastname}', 'App\Http\Controllers\DemoController@YourName');
// Route::get('/','App\Http\Controllers\DemoController@Home');
Route::get('login', [UserController :: class , 'login']);



?>