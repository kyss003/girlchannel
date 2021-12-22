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

Route::get('/make_topic', function () {
    return view('make_topic');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/category_search', function () {
    return view('category_search');
});
Route::get('/key_word', function () {
    return view('key_word');
});
Route::get('/weekly', function () {
    return view('weekly');
});
Route::get('/topics', function () {
    return view('topics');
});
Route::get('/topic_image', function () {
    return view('topic_image');
});
Route::get('/search', function () {
    return view('search');
});



