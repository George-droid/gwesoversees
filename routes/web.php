<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;

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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CustomAuthController::class, 'home'])->name('home');
Route::get('/about', [CustomAuthController::class, 'about'])->name('about');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact-us/submit', [ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog-1', [BlogController::class, 'blog1'])->name('blog1');
Route::get('/blog-2', [BlogController::class, 'blog2'])->name('blog2');
Route::get('/blog-3', [BlogController::class, 'blog3'])->name('blog3');
Route::get('/blog-4', [BlogController::class, 'blog4'])->name('blog4');
