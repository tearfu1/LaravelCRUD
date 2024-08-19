<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');

use App\Http\Controllers\MainController;

Route::get('/main', [MainController::class, 'index'])->name('main.index');



Route::get('/', function () {
    return view('welcome');
});

