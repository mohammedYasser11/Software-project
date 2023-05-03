<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    return "hello world";
});

Route::get('/transformations', function () {
    return view('transformation');
});

Route::get('/follow-up-step-one', function () {
    return view('follow-up');
});

Route::get('/follow-up-step-two', function () {
    return view('follow-up-2');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/registeration-questions', function () {
    return view('registeration-questions');
});