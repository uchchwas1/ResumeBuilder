<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserDetailsController;

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

// Route::get('/', 'App\Http\Controllers\SiteController@Home');
// Route::get('/About', 'App\Http\Controllers\SiteController@About');
// Route::get('/Contact', 'App\Http\Controllers\SiteController@Contact');
// Route::get('/Name/{firstname}/{middlename}/{lastname}', 'App\Http\Controllers\DemoController@YourName');
// Route::get('/','App\Http\Controllers\DemoController@Home');
//Route::get('login', [UserController :: class , 'login']);

//Route for signup-signin
Route::get('dashboard', [UserAuthController::class, 'dashboard']); 
Route::get('login', [UserAuthController::class, 'index'])->name('login');
Route::post('custom-login', [UserAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [UserAuthController::class, 'signOut'])->name('signout');

//Route for
Route::get('/home', function(){
    return view('HomePage');
});
Route::get('/about', function(){
    return view('AboutPage');
});
Route::get('/user-detail/create', [UserDetailsController::class, 'create'])->middleware('auth');
Route::post('/user-detail', [UserDetailsController::class, 'store'])->middleware('auth');




?>