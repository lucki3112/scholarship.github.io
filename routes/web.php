<?php

use App\Http\Controllers\myController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[myController::class,'index'])->name('home')->middleware('home');
Route::get('/signup',[myController::class,'signup'])->name('signup');
Route::get('/login',[myController::class,'login'])->name('login');
Route::post('/signup',[myController::class,'store']);
Route::post('/login',[myController::class,'signin']);
Route::get('/profile',[myController::class,'profile'])->middleware('profile')->name('profile');
Route::get('/logout',[myController::class,'logout'])->name('logout')->middleware('profile');
Route::get('/admin_login',[myController::class,'admin_login'])->name('admin_login')->middleware('profile');
Route::post('/admin_login',[myController::class,'admin_sigin']);
Route::get('/admin_profile',[myController::class,'admin_profile'])->name('admin_profile')->middleware('adminLogin');
Route::get('/add_scholarship',[myController::class,'add_scholarship'])->name('add_scholarship')->middleware('adminLogin');
Route::post('/add_scholarship',[myController::class,'store_scholarship']);
Route::get('view_scholarship',[myController::class,'view_scholarship'])->name('view_scholarship')->middleware('adminLogin');
Route::get('/update_scholarship/{id}',[myController::class,'update_scholarship'])->name('update_scholarship')->middleware('adminLogin');
Route::get('/delete_scholarship/{id}',[myController::class,'delete_scholarship'])->name('delete_scholarship')->middleware('adminLogin');
Route::post('/update_scholarship/{id}',[myController::class,'edit_scholarship'])->middleware('adminLogin');
Route::get('/admin_logout',[myController::class,'admin_logout'])->name('admin_logout')->middleware('adminLogin');
Route::get('/admin_change_password',[myController::class,'admin_change_password'])->name('admin_change_password')->middleware('adminLogin');
Route::post('/admin_change_password',[myController::class,'admin_password'])->middleware('adminLogin');
Route::get('/apply/{id}',[myController::class,'apply'])->name('apply')->middleware('profile');
Route::post('/apply/{id}',[myController::class,'apply_scholarship'])->middleware('profile');
Route::get('/track',[myController::class,'track'])->name('track')->middleware('profile');
Route::get('/institute_signup',[myController::class,'institute_signup'])->name('institute_signup');
Route::post('/institute_signup',[myController::class,'institute_store']);
Route::get('/institute_login',[myController::class,'institute_login'])->name('institute_login');
Route::post('/institute_login',[myController::class,'institute_signin']);
Route::get('/institute_profile',[myController::class,'institute_profile'])->middleware('instituteLogin')->name('institute_profile');
Route::get('/institute_logout',[myController::class,'institute_logout'])->name('institute_logout');
Route::get('/applicant',[myController::class,'applicant'])->name('applicant')->middleware('instituteLogin');
Route::get('/student/{id}',[myController::class,'student'])->name('student')->middleware('instituteLogin');
Route::get('/verify/{id}',[myController::class,'verify'])->name('verify')->middleware('instituteLogin');
Route::get('/state_login',[myController::class,'state_login'])->name('state_login');
Route::post('/state_login',[myController::class,'state_signin']);
Route::get('/state_profile',[myController::class,'state_profile'])->middleware('stateLogin')->name('state_profile');
Route::get('/state_logout',[myController::class,'state_logout'])->name('state_logout');
Route::get('/state_applicant',[myController::class,'state_applicant'])->name('state_applicant')->middleware('stateLogin');
Route::get('/student_detail/{id}',[myController::class,'student_detail'])->name('student_detail')->middleware('stateLogin');
Route::get('/state_verify/{id}',[myController::class,'state_verify'])->name('state_verify')->middleware('stateLogin');


