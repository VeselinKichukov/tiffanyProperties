<?php

Route::prefix('/appartments')->group(function() {
  Route::get('/', function() {
     return view('appartments');
  })->name('apartments');

  Route::get('/pomorie', function() {
      return view('apartments.pomorie');
  })->name('apartments.pomorie');

    Route::get('/sinemorec', function() {
        return view('apartments.sinemorec');
    })->name('apartments.sinemorec');

    Route::get('/primorsko', function() {
        return view('apartments.primorsko');
    })->name('apartments.primorsko');

    Route::get('/vlas', function() {
        return view('apartments.vlas');
    })->name('apartments.vlas');
});

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/check-in', function() {
  return view('checkin');
})->name('check-in');

Route::get('/contacts', 'ContactController@show');
Route::post('/contacts', 'ContactController@mailToAdmin');
