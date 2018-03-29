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

Route::get('/','DashboardController@index')->name('home');

//Route::get('/home','DashboardController@index');

//Route::get('/member/create','TestController@index')->name('home');

//Route::get('/member/create','TestController@create');

//Route::post('/member', 'TestController@store');

Route::get('/login','SessionsController@create')->name('login');

Route::post('/login','SessionsController@store');

Route::get('logout','SessionsController@destroy');

Route::get('/members', 'MemberController@index');

Route::get('/member/create', 'MemberController@create');

Route::get('member/{theMember}','MemberController@show');

Route::post('/member', 'MemberController@store');

Route::get('savings/{theMember}/create', 'SavingsController@create');

Route::post('savings/{theMember}','SavingsController@store');

Route::get('loans/{theMember}/create','LoansController@create');

Route::post('loans/{theMember}','LoansController@store');

Route::get('fines/{theMember}/create','FinesController@create');

Route::post('fines/{theMember}','FinesController@store');

Route::get('shares/{theMember}/create','SharesController@create');

Route::post('shares/{theMember}','SharesController@store');

Route::get('/monthly','MonthlyRecordsController@index');

Route::get('monthly/{year}/{month}','MonthlyRecordsController@show');

Route::get('updateRecord/{id}','MonthlyRecordsController@create');

Route::post('updateRecord/{id}','MonthlyRecordsController@store');