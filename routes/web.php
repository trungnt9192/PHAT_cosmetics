<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoryController;

// For admin access
Route::get('/admin', 'App\Http\Controllers\AdminController@loginAdmin');
Route::post('/admin', 'App\Http\Controllers\AdminController@postLoginAdmin');


Route::get('/home', function(){
    return view('home');
});


Route::prefix('admin')->group(function(){
    Route::prefix('categories')->group(function () {
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'App\Http\Controllers\CategoryController@index'
        ]);
        
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'App\Http\Controllers\CategoryController@create'
        ]);
        
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'App\Http\Controllers\CategoryController@store'
        ]);
    
        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'App\Http\Controllers\CategoryController@edit'
        ]);
    
        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'App\Http\Controllers\CategoryController@update'
        ]);
    
        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'App\Http\Controllers\CategoryController@delete'
        ]);
    
    });
    
    Route::prefix('brands')->group(function () {
        Route::get('/', [
            'as' => 'brands.index',
            'uses' => 'App\Http\Controllers\BrandController@index'
        ]);
        
        Route::get('/create', [
            'as' => 'brands.create',
            'uses' => 'App\Http\Controllers\BrandController@create'
        ]);
        
        Route::post('/store', [
            'as' => 'brands.store',
            'uses' => 'App\Http\Controllers\BrandController@store'
        ]);
    
        Route::get('/edit/{id}', [
            'as' => 'brands.edit',
            'uses' => 'App\Http\Controllers\BrandController@edit'
        ]);
    
        Route::post('/update/{id}', [
            'as' => 'brands.update',
            'uses' => 'App\Http\Controllers\BrandController@update'
        ]);
    
        Route::get('/delete/{id}', [
            'as' => 'brands.delete',
            'uses' => 'App\Http\Controllers\BrandController@delete'
        ]);
    
    });

    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'App\Http\Controllers\MenuController@index'
        ]);
        
        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'App\Http\Controllers\MenuController@create'
        ]);
        
        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'App\Http\Controllers\MenuController@store'
        ]);
        
        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'App\Http\Controllers\MenuController@edit'
        ]);
    
        Route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'App\Http\Controllers\MenuController@update'
        ]);
    
        Route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'App\Http\Controllers\MenuController@delete'
        ]);
    
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [
            'as' => 'products.index',
            'uses' => 'App\Http\Controllers\AdminProductController@index'
        ]);
        
        Route::get('/create', [
            'as' => 'products.create',
            'uses' => 'App\Http\Controllers\AdminProductController@create'
        ]);

        
    });















});







// Route::get('/admin', function() {
//     return view('layouts.admin');
// })
