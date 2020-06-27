<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'ArticleController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/detail/{id}', 'ArticleController@detail');
Route::get('/products', 'Product/ProductController@index');