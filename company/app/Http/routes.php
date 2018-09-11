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

        // Routes for the menu admin
        Route::group(array('prefix' => '/menu'), function() {
            // Showing the admin for the menu builder and updating the order of menu items
            Route::get('/', ['as' => 'admin-menu-index-get', 'uses' => 'admin\MenuController@getIndex']);
            Route::post('/', ['as' => 'admin-menu-index-post', 'uses' => 'admin\MenuController@postIndex']);

            Route::post('new', ['as' => 'admin-menu-new-post', 'uses' => 'admin\MenuController@postNew']);
            Route::post('delete', ['as' => 'admin-menu-delete-post', 'uses' => 'admin\MenuController@postDelete']);

            Route::get('edit/{id}', ['as' => 'admin-menu-edit-get', 'uses' => 'admin\MenuController@getEdit']);
            Route::post('edit/{id}', ['as' => 'admin-menu-edit-post', 'uses' => 'admin\MenuController@postEdit']);
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
            Route::post('/delete', ['as' => 'admin-category-delete-post',
                'uses' => 'admin\CategoryController@delete']);
        });

        // news request
        Route::group(['prefix' => 'news'], function () {
            Route::get('/', ['as' => 'admin-news-index',
                'uses' => 'admin\NewsController@index']);
            Route::get('/create', ['as' => 'admin-news-create-get',
                'uses' => 'admin\NewsController@beforeCreate']);
            Route::post('/create', ['as' => 'admin-news-create-post',
                'uses' => 'admin\NewsController@create']);
            Route::get('/edit/{id}', ['as' => 'admin-news-edit-get',
                'uses' => 'admin\NewsController@edit']);
            Route::post('/edit', ['as' => 'admin-news-edit-post',
                'uses' => 'admin\NewsController@update']);
            Route::post('/delete', ['as' => 'admin-news-delete-post',
                'uses' => 'admin\NewsController@delete']);
        });
        
        // contacts request
        Route::group(['prefix' => 'contact'], function () {
            Route::get('/', ['as' => 'admin-contact-index',
                'uses' => 'admin\ContactController@index']);                        
            Route::get('/detail/{id}', ['as' => 'admin-contact-detail',
                'uses' => 'admin\ContactController@detail']);           
            Route::post('/delete', ['as' => 'admin-contact-delete-post',
                'uses' => 'admin\ContactController@delete']);
        });
    });
});

//Front side
//Index
Route::get('/', ['as' => 'front-top',
    'uses' => 'front\IndexController@index']);
//language
Route::get('/language/{language}', function($language) {
    $language === 'en' ? session(['language' => 'en']) : session(['language' => 'vi']);
    return redirect()->back();
});

//About
Route::get('/about', ['as' => 'about-index',
    'uses' => 'front\IndexController@getAbout']);

//Service
Route::get('/service', ['as' => 'service-index',
    'uses' => 'front\IndexController@getService']);

//product
Route::group(['prefix' => 'product'], function () {
    Route::get('/list', ['as' => 'product-list',
        'uses' => 'front\ProductController@getList']);
    Route::get('/detail/{id}', ['as' => 'product-detail',
        'uses' => 'front\ProductController@getDetail']);
});

//News
Route::group(['prefix' => 'news'], function () {
    Route::get('/list', ['as' => 'news-list',
        'uses' => 'front\NewsController@getList']);
    Route::get('/detail/{id}', ['as' => 'news-detail',
        'uses' => 'front\NewsController@getDetail']);
});

//Contact
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', ['as' => 'contact-index',
        'uses' => 'front\ContactController@getContact']);
    Route::post('/', ['as' => 'contact-complete',
        'uses' => 'front\ContactController@postContact']);
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
