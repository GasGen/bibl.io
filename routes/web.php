<?php

use Illuminate\Support\Facades\Route;

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
    return view('search');
});

Route::post('/search', 'SearchController@results');

Route::get('/crud', function () {
    return view('crud');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'CategoriesController');
Route::resource('/authors', 'AuthorsController');
Route::resource('/books', 'BooksController');
Route::resource('/readers', 'ReadersController');

//Route::resource('/authors', 'AuthorsController');
