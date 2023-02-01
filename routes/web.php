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
use App\Http\Controllers\lab2_controller;
Route::get("/view posts", [lab2_controller::class, "show"])->name('posts.view');
Route::get('/add posts', [lab2_controller::class, 'add_form'])->name('posts.form');
Route::post('/add posts/done', [lab2_controller::class, 'insert'])->name('posts.add');
Route::get('/post details/{id}', [lab2_controller::class, 'details'])->name('posts.show');
Route::delete('/post delete/{id}', [lab2_controller::class, 'delete'])->name('posts.delete');


