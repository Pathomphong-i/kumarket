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

Route::get('/mos', function () {
    return view('mos');
});

Route::get('/phet', function () {
    return view('phet');
});

Route::get('/lookkaew', function () {
    return view('lookkaew');
});

Route::get('/nae', function () {
    return view('nae');
});

Route::get('/ohm', function () {
    return view('ohm');
}); 

// Route::get('/admin', function () {
//     return view('admin');
// });
Route::resource('admin', 'TimeController');
//Route::resource('shares', 'ShareController');
