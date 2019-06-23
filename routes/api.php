<?php

use Illuminate\Http\Request;
use App\Member;
use App\Transaction;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 

// Get all member details
Route::get('members', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure.
    return Member::all();
});


//  Get id wise memeber details
Route::get('members/{id}', function() {
    return Member::find($id);
});

// insert members details
Route::post('members', function(Request $request) {
    return Member::create($request->all);
});

// update member details
Route::put('members/{id}', function(Request $request, $id) {
    $member = Member::findOrFail($id);
    $member->update($request->all());

    return $member;
});

// delete member by ID
Route::delete('members/{id}', function($id) {
    Member::find($id)->delete();

    return 204;
});

// Get all transaction details
Route::get('transactions', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure.
    return Transaction::all();
});

//  Get id wise transaction details
Route::get('transactions/{id}', function() {
    return Transaction::find($id);
});

// insert transaction details
Route::post('transactions', function(Request $request) {
    return Transaction::create($request->all);
});

// update transaction details
Route::put('transactions/{id}', function(Request $request, $id) {
    $transaction = Transaction::findOrFail($id);
    $transaction->update($request->all());

    return $transaction;
});

// delete transaction by ID
Route::delete('transactions/{id}', function($id) {
    Transaction::find($id)->delete();

    return 204;
});

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function() {
    Route::get('members', 'MemberController@index');
    Route::get('search', 'MemberController@searchMember');
    Route::get('members/{id}', 'MemberController@show');
    Route::post('members', 'MemberController@store');
    Route::post('members/{id}', 'MemberController@update');
    Route::delete('members/{id}', 'MemberController@delete');
    Route::delete('members/{id} ', 'MemberController@delete');
    
    // transaction api route
    Route::get('transactions/{id}', 'TransactionController@index');
    //Route::get('transactions/{id}', 'TransactionController@show');
    Route::post('transactions', 'TransactionController@store');
    Route::put('transactions/{id}', 'TransactionController@update');
    Route::delete('transactions/{id}', 'TransactionController@delete');
    Route::delete('transactions/{id} ', 'TransactionController@delete');
    Route::get('history-chack/{id}', 'TransactionController@transactionByCategory');
    Route::get('transaction-summery/{id}', 'TransactionController@transactionSummery');
    //Notification
    Route::get('notifications', 'NotificationController@index');
    //category list
    Route::get('category', 'payCategoryController@index');
});



