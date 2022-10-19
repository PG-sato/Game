<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClipreviewController;
use App\Http\Controllers\︎Auth\RegisterController;

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
    Route::get('/posts/prof', 'Auth\RegisterController@prof');
    //Route::get('/posts/review', [ClipreviewController::class, 'review']);
    Route::get('/posts/review/{post}', 'ClipReviewController@review');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/prof', 'Auth\RegisterController@prof');
    Route::post('/posts/store', 'PostController@store');
    Route::post('/posts/comment', 'ClipReviewController@comment');
});

Auth::routes();
