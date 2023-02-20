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
    return view('home');
});

Route::get('/comics', function () {
    $books = config('comics.books');
    return view('comics', compact('books'));
})->name('comics');

Route::get('/comics/{param}', function ($param) {
    $books = config('comics.books');
    $single_book = $books[$param];
    return view('single_comic', compact('single_book'));
})->name('single-comic');