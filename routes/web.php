<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClipreviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\︎Auth\RegisterController;
use App\Http\Controllers\︎Auth\ChatController;

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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'PostController@cliphome');
    Route::get('/posts/clip', 'PostController@clip');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/prof', 'UserController@prof');
    Route::get('/chathome', 'ChatController@chathome');
    Route::get('/chathome/chat/{recipient}', 'ChatController@chat');
    Route::get('/posts/review/{post}', 'ClipReviewController@review');
    Route::get('/posts/{post}', 'PostController@show');
    Route::post('/chathome/chat/send', 'ChatController@store');
    Route::post('/posts/store', 'PostController@store');
    Route::post('/posts/prof/store', 'UserController@store');
    Route::post('/posts/comment', 'ClipReviewController@comment');
    Route::post('/users/{user}/follow', 'FollowUserController@follow');
    Route::post('/users/{user}/unfollow', 'FollowUserController@unfollow');
});

Auth::routes();
