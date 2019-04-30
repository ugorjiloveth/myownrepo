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

Route::get('/about-us', function () {
    return view('/about-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
   return view('contact');
});

Route::get('/elements', function () {
   return view('elements');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/services', function () {
    return view('services');
});

Auth::routes();


// for my socialite
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');


Route::get('/home', 'HomeController@index')->name('home');



//for my crud system//
Route::get('layout/products/index','ProductController@index')->name('prod');

Route::get('layout/products/create','ProductController@create');
Route::post('layout/store','ProductController@store')->name('store');
Route::get('layout/store','ProductController@store')->name('store');