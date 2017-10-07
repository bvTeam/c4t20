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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/', 'HomeController@login')->name('welcome');
Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/joblist', function () {
    return view('users.joblist');
});
Route::get('/post-details', function () {
    return view('users.post_details');
});

//UserController
//CompanyController
Route::get('/cv-list', 'CvListController@cvList');


Route::get('/create-post', function () {
    return view('users.create-post');
});

