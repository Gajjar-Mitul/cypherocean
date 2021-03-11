<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/web_development', function () {
    return view('web_development');
});

Route::get('/app_development', function () {
    return view('app_development');
});

Route::get('/uiux_design', function () {
    return view('uiux_design');
});

Route::get('/logo_design', function () {
    return view('logo_design');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::post('/contact/store', 'App\Http\Controllers\ContactController@store')->name('contact/store');