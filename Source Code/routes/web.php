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
});


// ======================


// Route::get('login', function () {
//     return view('admin.login');
// });

Route::get('side-menu-crud-data-list', function () {
    return view('admin.side-menu-crud-data-list');
});
Route::get('side-menu-datepicker', function () {
    return view('admin.side-menu-datepicker');
});
Route::get('icon', function () {
    return view('admin.icon');
});

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

Route::get('profile', function () {
    return view('Pages.user-profile');
});
Route::get('404', 'cartController@index');
Route::get('book', 'BookingController@book');

Route::get('bookNow/{id}', 'BookUserController@index');
Route::post('bookNow/{id}', 'BookUserController@store');
// Route::get('HallSingle','HallController@create');

Route::get('/login', 'loginRegisterController@index');
// ======================
Route::post('/login', 'loginRegisterController@login');
Route::post('/register', 'loginRegisterController@register');
Route::get('/logout', 'loginRegisterController@logout');
// ======================

// loginTest
// Route::get('loginTest', function () {
//     return view('Pages.loginTest');
// });
