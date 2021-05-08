<?php

use App\Http\Middleware\ForyouMiddleware;

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
    return view('/welcome');
});


Route::get('/starter', function () {
    return view('/starter');
});


Auth::routes();


Route::get('/postcards', 'PagesController@postcards')->name('postcards');

Route::get('/photos', 'PagesController@photos')->name('photos');



Route::resource('photos', 'PhotosController');

Route::resource('postcards', 'PostcardsController');

Route::get('/confirm', 'PostcardsController@confirm')->name('postcards.confirm');

Route::get('/show', 'PostcardsController@show')->name('postcards.show');

Route::get('postcards/{id}/edit', 'PostcardsController@edit');  // 追加
Route::patch('postcards/{id}', 'PostcardsController@update');
Route::delete('postcards/{id}', 'PostcardsController@destroy');

Route::get('/index', 'PostcardsController@index')->middleware(ForyouMiddleware::class)->name('index');

// Route::get('/', 'photosController@index');
Route::post('/', 'photosController@store')->name('photos.store');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('postcard/create', 'PostcardController@create');

Route::post('postcard', 'PostcardController@store');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/form', "SampleFormController@show")->name("form.show");
Route::post('/form', "SampleFormController@post")->name("form.post");

Route::get('/form/confirm', "SampleFormController@confirm")->name("form.confirm");
Route::post('/form/confirm', "SampleFormController@send")->name("form.send");

Route::get('/form/thanks', "SampleFormController@complete")->name("form.complete");
