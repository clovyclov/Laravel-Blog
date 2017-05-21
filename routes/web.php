<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$fname = "Clovis";
$lname = "Shropshire";
$fullname = $fname . " " . $lname;

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

/*

Route::get('contact', function(){
    return view('contact');
});

Route::get('about', function(){
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});
