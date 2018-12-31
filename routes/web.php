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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verifyEmailFirst/{id}', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('sendEmailAgain/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailAgain')->name('sendEmailAgain'); 

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

// other
//Route::get('invite-friend', 'FriendsController@inviteForm')->name('inviteForm');
Route::post('/home','FriendsController@invite')->name('inviteForm');
//Route::post('invite-friend', 'FriendsController@invite')->name('invite');
Route::get('verify-freind/{email}/{verifyToken}', 'FriendsController@sendInvitaionEmailDone')->name('sendInvitaionEmailDone');
Route::delete('/delete-friend/{id}', 'FriendsController@destroy');




