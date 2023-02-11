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
    return view('welcome');
});


use App\Http\Controllers\homeController;
Route::get('/home', [homeController::class, 'home']);

use App\Http\Controllers\contactController;
Route::get('/Contact Us', [contactController::class, 'contact']);

use App\Http\Controllers\aboutController;
Route::get('/About Us', [aboutController::class, 'about']);



Route::get('/add posts', function () {
    return view('add_post');
});
// use App\Http\Controllers\lab2_controller;
use App\Http\Controllers\PostController;
// Route::get("/view posts", [PostController::class, "show"])->name('posts.view');
// Route::get('/add posts', [PostController::class, 'add_form'])->name('posts.form');
// Route::post('/add posts/done', [PostController::class, 'insert'])->name('posts.add');
// Route::get('/post details/{id}', [PostController::class, 'details'])->name('posts.show');
// Route::delete('/post delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
// Route::get('/posts/edit/{id}',[PostController::class, 'edit'])->name('posts.edit');
// Route::post('/posts/update/{id}',[PostController::class, 'update'])->name('posts.update');

// Route::get("/view posts", [PostController::class, "index"])->name('posts.index');
// Route::get('/add posts', [PostController::class, 'create'])->name('posts.create');
// Route::post('/add posts/done', [PostController::class, 'store'])->name('posts.store');
// Route::get('/post details/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::delete('/post delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::get('/posts/edit/{id}',[PostController::class, 'edit'])->name('posts.edit');
// Route::post('/posts/update/{id}',[PostController::class, 'update'])->name('posts.update');

//using CRD OP
// Route::get("/view posts", [PostController::class, "index"])->name('posts.index');
// Route::get('/add posts', [PostController::class, 'create'])->name('posts.create');
// Route::post('/add_posts/done', [PostController::class, 'store'])->name('posts.store');
// Route::get('/post details/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::delete('/post delete/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::get('/posts/edit/{post}',[PostController::class, 'edit'])->name('posts.edit');
// Route::post('/posts/update/{post}',[PostController::class, 'update'])->name('posts.update');


Route::resource('posts', PostController::class);