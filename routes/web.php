<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Key_wordController;
use App\Http\Controllers\TopicsController;
use App\Http\Controllers\Make_topicController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\Topic_imageController;
use App\Http\Controllers\Category_searchController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/make_topic', function () {
//     return view('make_topic');
// });
// Route::get('/category', function () {
//     return view('category');
// });
// Route::get('/category_search', function () {
//     return view('category_search');
// });
// Route::get('/key_word', function () {
//     return view('key_word');
// });
// Route::get('/weekly', function () {
//     return view('weekly');
// });
// Route::get('/topics', function () {
//     return view('topics');
// });
// Route::get('/topic_image', function () {
//     return view('topic_image');
// });
// Route::get('/search', function () {
//     return view('search');
// });

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/topics/{id}', [HomeController::class, 'show']);
Route::get('/make_topic', [HomeController::class, 'create']);


//search
Route::get('/search', [SearchController::class, 'index']);

//topic_image
Route::get('/topic_image', [Topic_imageController::class, 'index']);

//weekly
Route::get('/weekly', [WeeklyController::class, 'index']);

//key_word
Route::get('/key_word', [Key_wordController::class, 'index']);


// Category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('topics/category/{id}', [CategoryController::class, 'show']);
// Route::get('/category', [CategoryController::class, 'create']);
// Route::post('/categories', [CategoryController::class, 'store']);
// Route::get('/categories/{id}', [CategoryController::class, 'edit']);
// Route::put('/categories/{id}', [CategoryController::class, 'update']);
// Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

//category_search

Route::get('topics/category/{id}', [Category_searchController::class, 'index']);