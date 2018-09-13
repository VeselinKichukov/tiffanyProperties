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


// // app/Http/routes.php

// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/', function()
// 	{
// 		return View::make('welcome');
// 	});

// 	Route::get('/home',function(){
// 		return View::make('hello');
// 	});
// });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

// Route::get('locale', function () {
//   return \App::getLocale();
// });

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

	
Route::view('/hello', 'hello');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('hello');
// });

Route::get('/appartments', function() {
  return view('appartments');
});

Route::get('/checkin', function() {
  return view('checkin');
});

Route::get('/contacts', function() {
  return view('contacts');
});

Route::get('/vlas', function() {
  return view('vlas');
});

Route::get('/primorsko', function() {
  return view('primorsko');
});

Route::get('/pomorie', function() {
  return view('pomorie');
});

Route::get('/sinemorets', function() {
  return view('sinemorets');
});
