<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\RestTestController;
use Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'blog'], function () {
    Route::resource('posts', PostController::class)->names('blog.posts');
});







//Route::resource('rest', RestTestController::class)->names('restTest');


