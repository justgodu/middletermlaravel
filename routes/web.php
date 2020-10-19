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

Route::get('/admin/genre', "App\Http\Controllers\GenreController@index")->name("admingenres");
Route::get('/genres', "App\Http\Controllers\GenreController@show")->name("genres");
Route::get('/admin/genre/edit/{id}', "App\Http\Controllers\GenreController@edit")->name("admingenreedit");
Route::post('/admin/genre/update', "App\Http\Controllers\GenreController@update")->name("admingenreupdate");
Route::get('/admin/genre/detroy', "App\Http\Controllers\GenreController@destroy")->name("admingenredestroy");
Route::post('/admin/genre/', "App\Http\Controllers\GenreController@destroy")->name("admingenredestroy");
Route::get('/admin/genre/create', "App\Http\Controllers\GenreController@create")->name("admingenrescreate");
Route::post('/admin/genre/add', "App\Http\Controllers\GenreController@store")->name("admingenrestore");

Route::get('/genre/{id}', "App\Http\Controllers\BooksController@filter")->name("booksbygenre");
Route::get('/', "App\Http\Controllers\BooksController@show")->name("books");
Route::get('/admin/book/edit/{id}', "App\Http\Controllers\BooksController@edit")->name("adminbookedit");
Route::post('/admin/book/update', "App\Http\Controllers\BooksController@update")->name("adminbookupdate");
Route::post('/admin/book/detroy', "App\Http\Controllers\BooksController@destroy")->name("adminbookdestroy");
Route::post('/admin/book/add', "App\Http\Controllers\BooksController@store")->name("adminbookstore");
Route::get('/admin/book/create', "App\Http\Controllers\BooksController@create")->name("adminbookcreate");
