<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

//Admin side
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login/', ['as' => 'admin-login',
        'uses' => 'admin\IndexController@getLogin']);
    Route::post('/login/', ['as' => 'admin-login-post',
        'uses' => 'admin\IndexController@postLogin']);

    //Need to login
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'admin-top',
            'uses' => 'admin\IndexController@index']);
        Route::get('/products', ['as' => 'admin-product-top',
            'uses' => 'admin\ProductController@index']);
        Route::get('/products/edit/{id}', ['as' => 'admin-product-edit',
            'uses' => 'admin\ProductController@getEdit']);
        Route::get('/products/edit/', ['as' => 'admin-product-edit',
            'uses' => 'admin\ProductController@getCreate']);
        // menu request
        Route::group(['prefix' => 'menu'], function () {
            Route::get('/', ['as' => 'admin-menu-index',
                'uses' => 'admin\MenuController@index']);
            Route::get('/create', ['as' => 'admin-menu-create-get',
                'uses' => 'admin\MenuController@beforeCreate']);
            Route::post('/create', ['as' => 'admin-menu-create-post',
                'uses' => 'admin\MenuController@create']);
            Route::get('/edit/{id}', ['as' => 'admin-menu-bofore-edit',
                'uses' => 'admin\MenuController@edit']);
            Route::post('/edit', ['as' => 'admin-menu-edit',
                'uses' => 'admin\MenuController@update']);
            Route::get('/delete/{id}', ['as' => 'admin-menu-delete',
                'uses' => 'admin\MenuController@delete']);
        });
        // category request
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', ['as' => 'admin-category-index',
                'uses' => 'admin\CategoryController@index']);
            Route::get('/create', ['as' => 'admin-category-create-get',
                'uses' => 'admin\CategoryController@beforeCreate']);
            Route::post('/create', ['as' => 'admin-category-create-post',
                'uses' => 'admin\CategoryController@create']);
            Route::get('/edit/{id}', ['as' => 'admin-category-edit-get',
                'uses' => 'admin\CategoryController@edit']);
            Route::post('/edit', ['as' => 'admin-category-edit-post',
                'uses' => 'admin\CategoryController@update']);
        });
    });
});

//Front side
//Index
Route::get('/', ['as' => 'front-top',
    'uses' => 'front\IndexController@index']);

//product
Route::group(['prefix' => 'product'], function () {
    Route::get('/list', ['as' => 'product-list',
        'uses' => 'front\ProductController@getList']);
    Route::get('/detail/{id}', ['as' => 'product-detail',
        'uses' => 'front\ProductController@getDetail']);
});

Route::get('/charts', function() {
    return View::make('mcharts');
});

Route::get('/tables', function() {
    return View::make('table');
});

Route::get('/forms', function() {
    return View::make('form');
});

Route::get('/grid', function() {
    return View::make('grid');
});

Route::get('/buttons', function() {
    return View::make('buttons');
});


Route::get('/icons', function() {
    return View::make('icons');
});

Route::get('/panels', function() {
    return View::make('panel');
});

Route::get('/typography', function() {
    return View::make('typography');
});

Route::get('/notifications', function() {
    return View::make('notifications');
});

Route::get('/blank', function() {
    return View::make('blank');
});

Route::get('/login', function() {
    return View::make('login');
});

Route::get('/documentation', function() {
    return View::make('documentation');
});
