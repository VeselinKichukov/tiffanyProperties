<?php

use app\Https\Controllers\ContactController;

use App\Mail\ContactsFormMail;
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

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/appartments', function() {
  return view('appartments');
});

Route::get('/checkin', function() {
  return view('checkin');
});

// Route::get('/contacts', function() {
//   Mail::to('danvelev9@gmail.com')->send(new ContactsFormMail);
//
//   return view('emails.contact');
//
// });

// Route::get('/contacts', function() {
//   return view('contacts');
// });

Route::get('/contacts', 'ContactController@show');
Route::post('/contacts', 'ContactController@mailToAdmin');

//
// Route::get('/contacts', function() {
//   return view('contacts');
// });
