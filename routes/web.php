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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member', 'MemberController@index')->name('member');
Route::get('/all-transaction', 'TransactionController@index')->name('all-transaction');
Route::resource('category', 'CategoryController');
Route::resource('notifications', 'NotificationController');
Route::get('search-transaction', 'TransactionController@searchTransaction');
Route::get('member-details/{id}', 'MemberController@memberDetails');
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('change-password/{id}', 'SettingsController@changePassword');
Route::post('update-password/{id}', 'SettingsController@updatePassword');