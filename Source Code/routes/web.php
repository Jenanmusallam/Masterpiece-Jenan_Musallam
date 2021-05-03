<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Route::redirect('/', '/admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => [
    'isLogin', 'customAuth'
]], function () {
    Route::redirect('/', '/admin/admin');
    Route::resource('admin', 'AdminController');
    Route::resource('category', 'CategoryController');
    Route::resource('halls', 'HallsController');
    Route::resource('Contact', 'ContactController');
    Route::resource('image', 'ImagesController');
    Route::resource('hall', 'HallController');
    Route::resource('Customer', 'CustomerController');
    Route::get('booking', 'BookingController@index');
    Route::get('booking/{id}/{status}', 'BookingController@changeStatus');
    Route::get('/search/', 'HallsController@search')->name('search');
});


// ======================

// End admin Dashboard

// ======================
// Public
Route::get('/', 'ShowPublicController@index');
Route::get('index', 'ShowPublicController@index');

// Categories
Route::get('CategoryPublic', 'ShowPublicController@Categories');
Route::get('CategoryPublic/{id}', 'ShowPublicController@CategoriesID');

// Halls
Route::get('HallsPublic', 'ShowPublicController@Halls');
Route::get('HallsPublic/{id}', 'ShowPublicController@HallsID');

// Hall Single
Route::get('HallSingle/{id}', 'ShowPublicController@HallSingle');
Route::post('HallSingle/{id}', 'ReviewController@store');

Route::get('/search/', 'ShowPublicController@search')->name('search');
// ==========================


// ==========================
Route::get('userProfile', 'ProfileController@index');
Route::patch('userProfile', 'ProfileController@update');

//============= public Side================ 


//contact routes
Route::get('ContactSite', 'ContactController@contact');
Route::post('ContactSite', 'ContactController@store');

Route::get('about', 'AboutController@index');

Route::get('bookNow/{id}', 'BookUserController@index');
Route::post('bookNow', 'BookUserController@store');

Route::get('/login', 'loginRegisterController@index');
// ======================
Route::post('/login', 'loginRegisterController@login');
Route::post('/register', 'loginRegisterController@register');
Route::get('/logout', 'loginRegisterController@logout');
// ======================
