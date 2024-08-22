<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');
    Route::post('/posts', StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('post.destroy');
});


Route::group(['namespace' => "App\Http\Controllers\Admin", 'prefix' => 'admin'], function () {
    Route::get('/', MainController::class)->name('admin.main');
    Route::group(['namespace' => "Post"], function () {
        Route::get('/posts', IndexController::class)->name('admin.post.index');
        Route::get('/post/create', CreateController::class)->name('admin.post.create');
        Route::post('/posts', StoreController::class)->name('admin.post.store');
        Route::get('/posts/{post}', ShowController::class)->name('admin.post.show');
        Route::get('/posts/{post}/edit', EditController::class)->name('admin.post.edit');
        Route::patch('/posts/{post}', UpdateController::class)->name('admin.post.update');
        Route::delete('/posts/{post}', DestroyController::class)->name('admin.post.destroy');
    });
});

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

