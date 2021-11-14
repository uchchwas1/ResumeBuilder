<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\EducationDetailsController;
use App\Http\Controllers\ExperienceDetailsController;
use App\Http\Controllers\SkillDetailsController;
use App\Http\Controllers\ResumeDetailsController;
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
//Auth::routes();
Route::get('/home', function(){
    return view('HomePage');
});
Route::get('/about', function(){
    return view('AboutPage');
});
//Route::get('user-detail/create', [UserDetailsController::class, 'create'])->middleware('auth')->name('user-detail.create');
//Route::post('user-detail', [UserDetailsController::class, 'store'])->middleware('auth');
Route::get('education/details', [EducationDetailsController::class, 'create'])->middleware('auth')->name('education.details');
Route::post('education/details', [EducationDetailsController::class, 'store'])->middleware('auth');
Route::get('education', [EducationDetailsController::class, 'index'])->middleware('auth')->name('education.index');
Route::get('education/edit', [EducationDetailsController::class, 'edit'])->middleware('auth')->name('education.edit');
Route::put('education/update', [EducationDetailsController::class, 'update'])->middleware('auth')->name('education.update');
Route::delete('education/destroy', [EducationDetailsController::class, 'destroy'])->middleware('auth')->name('education.destroy');

// Auth::routes();
// Route::resource('user-detail', 'UserDetailsController')->middleware('auth');
// Route::resource('education', 'EducationDetailsController')->middleware('auth');


Route::resource('user-detail', UserDetailsController::class)->middleware('auth');

Route::resource('education', EducationDetailsController::class)->middleware('auth');
Route::resource('experience', ExperienceDetailsController::class)->middleware('auth');
Route::resource('skill', SkillDetailsController::class)->middleware('auth');
Route::get('resume', [ResumeDetailsController::class, 'index'])->name('resume.index')->middleware('auth');
?>