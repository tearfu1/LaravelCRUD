<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

use App\Http\Controllers\PersonController;

Route::get('/people', [PersonController::class, 'index'])->name('person.index');
Route::get('/people/create', [PersonController::class, 'create'])->name('person.create');
Route::post('/people', [PersonController::class, 'store'])->name('person.store');
Route::get('/people/{person}', [PersonController::class, 'show'])->name('person.show');
Route::get('/people/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');
Route::patch('/people/{person}', [PersonController::class, 'update'])->name('person.update');
Route::delete('/people/{person}', [PersonController::class, 'destroy'])->name('person.destroy');


Route::get('/', function () {
    return view('welcome');
});

