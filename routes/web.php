<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('app');
//});
Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/review', [FrontController::class, 'review'])->name('front.review');
Route::get('/faq', [FrontController::class, 'faq'])->name('front.faq');
Route::get('/blogs', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blogs/{id}', [FrontController::class, 'singleBlog'])->name('front.blog.single');
Route::get('/sign-in', [FrontController::class, 'signIn'])->name('front.sign-in');
Route::get('/sign-up', [FrontController::class, 'signUp'])->name('front.sign-up');
