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
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::group([], function () {
    Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);

    Route::auth();
});

// admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {
    // admin
    Route::match(['get', 'post'], '/', ['uses'=>'AdminController@execute', 'as'=>'admin']);

    Route::group(['prefix'=>'messages'], function () {
        Route::get('/', ['uses'=>'AdminController@message_execute', 'as'=>'messages']);
        Route::match(['get', 'post', 'delete'], '/edit/{message}', ['uses'=>'AdminController@message_edit_execute', 'as'=>'messagesEdit']);
    });

    Route::group(['prefix'=>'peoples'], function () {
        Route::get('/', ['uses'=>'AdminController@people_execute', 'as'=>'peoples']);
        Route::match(['get', 'post', 'delete'], '/edit/{people}', ['uses'=>'AdminController@people_edit_execute', 'as'=>'peoplesEdit']);
    });

    Route::group(['prefix'=>'pages'], function () {
        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
    });

    Route::group(['prefix'=>'portfolios'], function () {
        Route::get('/', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PortfolioAddController@execute', 'as'=>'portfolioAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioEdit']);
    });

    Route::group(['prefix'=>'services'], function () {
        Route::get('/', ['uses'=>'ServiceController@execute', 'as'=>'service']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ServiceAddController@execute', 'as'=>'serviceAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServiceEditController@execute', 'as'=>'serviceEdit']);
    });
});

//Route::get('/home', 'HomeController@index')->name('home');
