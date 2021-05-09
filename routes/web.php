<?php

use App\Http\Middleware\ForyouMiddleware;
use App\Http\Controllers\WeightGraphController;

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

Route::get('/user_entry', "UserEntryController@index");

Route::get('/user_entry/{id}', "UserEntryController@detail");

//管理側
Route::group(['middleware' => ['auth.admin']], function () {

	//管理側トップ
	Route::get('/admin', 'admin\AdminTopController@show');
	//ログアウト実行
	Route::post('/admin/logout', 'admin\AdminLogoutController@logout');
	//ユーザー一覧
	Route::get('/admin/user_list', 'admin\ManageUserController@showUserList');
	//ユーザー詳細
	Route::get('/admin/user/{id}', 'admin\ManageUserController@showUserDetail');

});

//管理側ログイン
Route::get('/admin/login', 'admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'admin\AdminLoginController@login');

Route::get('/form',
	[App\Http\Controllers\UploadImageController::class, "show"]
	)->name("upload_form");

Route::post('/upload',
	[App\Http\Controllers\UploadImageController::class, "upload"]
	)->name("upload_image");

Route::get('/list',
[App\Http\Controllers\ImageListController::class, "show"]
)->name("image_list");

Route::get('/graph', [WeightGraphController::class,"show"])
   ->name("show_graph");
