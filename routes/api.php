<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::get('/user', 'AuthController@getAuthUser');
    Route::get('/logout', 'AuthController@logout');
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login')->name('login');

Route::get('/types', 'TypeController@index');
Route::get('/', 'HomeController@index');
Route::get('/catalog/{slug}', 'CatalogController@show');

Route::middleware('auth:api')->group(function () {
    Route::get('/catalog/product/{title}', 'ProductController@show');
    Route::get('/feedback/get/{id}', 'FeedbackController@show');
    Route::group([
        'prefix' => '/blog',
    ], function () {
        Route::get('', 'PostController@index');
        Route::get('/post/{title}', 'PostController@show');
    });

    Route::group([
        'prefix' => '/cart',
    ], function () {
        Route::get('/', 'CartController@index');
        Route::post('/add', 'CartController@store');
        Route::post('/update/{id}', 'CartController@update');
        Route::delete('/delete/{id}', 'CartController@delete');
    });

    Route::group([
        'prefix' => '/wishlist',
    ], function () {
        Route::get('/', 'WishlistController@index');
        Route::post('/add', 'WishlistController@store');
        Route::post('/update/{id}', 'WishlistController@update');
        Route::delete('/delete/{id}', 'WishlistController@delete');
    });
    Route::post('/note/add', 'NoteController@store');
    Route::post('/checkout/add', 'CheckoutController@store');
    Route::post('/contact/add', 'ContactController@store');
    Route::post('/feedback/add', 'FeedbackController@store');
});
