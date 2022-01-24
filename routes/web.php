<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Key_wordController;
use App\Http\Controllers\Key_word_searchController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\Make_topicController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\Topic_imageController;
use App\Http\Controllers\Category_searchController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Comment_relyController;


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

Route::get('make_topic', [HomeController::class, 'create']);
Route::post('make_topic', [HomeController::class, 'store']);
// Route::post('/make_topic', [HomeController::class, 'upload']);


//topic
Route::get('/topics/{id}', [TopicController::class, 'show']);
Route::post('save-likedislike',[TopicController::class, 'save_likedislike']);

//rank
Route::get('/rank', [RankController::class, 'index']);

//new
Route::get('/new', [NewController::class, 'index']);

//search
Route::get('/search', [SearchController::class, 'store'])->name('topics.search');


//topic_image
Route::get('topics/topic_image/{id}', [Topic_imageController::class, 'show']);

//weekly
Route::get('/weekly', [WeeklyController::class, 'index']);

//key_word
Route::get('key_word', [Key_wordController::class, 'index']);
Route::get('topics/keyword/{id}', [Key_wordController::class, 'show']);

//key_word_search
Route::get('topics/keyword/{id}', [Key_word_searchController::class, 'show']);

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
Route::get('topics/category/{id}', [Category_searchController::class, 'show']);

//comment
Route::get('comment_rely_count', [CommentController::class, 'show']);
Route::post('topics/{id}', [CommentController::class, 'update']);
Route::post('save-likedislike-comment',[CommentController::class, 'save_likedislike_comment']);

//comment rely
Route::get('comment_rely/{id}/{comment_id}', [Comment_relyController::class, 'show']);
Route::get('comment_rely/{id}', [Comment_relyController::class, 'show_topic']);
Route::post('comment_rely/{id}/{comment_id}', [Comment_relyController::class, 'update']);
Route::post('save-likedislike-comment-rely',[Comment_relyController::class, 'save_likedislike_comment_rely']);