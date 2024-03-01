<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DestinationController;

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
Route::get('/blogs/choosing-the-right', [BlogController::class, 'blog1'])->name('choosing-the-right');
Route::get('/blogs/benefits-of-studying', [BlogController::class, 'blog2'])->name('benefits-of-studying');
Route::get('/blog-3/navigating-the-application', [BlogController::class, 'blog3'])->name('navigating-the-application');
Route::get('/blog-4/cultural-adjustment', [BlogController::class, 'blog4'])->name('cultural-adjustment');

// Route::get('/destinations', [DestinationController::class, 'destinations'])->name('destinations');
// Route::post('/destinations/submit', [DestinationController::class, 'submitContactForm'])->name('destinations.submit');

Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/add-destinations', [DashboardController::class, 'addDestinations'])->name('be.adddestinations');
Route::post('/dashboard/save-destinations', [DashboardController::class, 'saveDestinations'])->name('be.savedestinations');
Route::get('/dashboard/list-destinations', [DashboardController::class, 'listDestinations'])->name('be.listdestinations');
Route::delete('/dashboard/list-destinations/delete/{id}', [DashboardController::class, 'deleteDestinations'])->name('be.deletedestinations');

Route::get('/dashboard/add-universities', [DashboardController::class, 'addUniversities'])->name('be.adduniversities');
Route::post('/dashboard/save-universities', [DashboardController::class, 'saveUniversities'])->name('be.saveuniversities');
Route::get('/dashboard/list-universities', [DashboardController::class, 'listUniversities'])->name('be.listuniversities');
Route::delete('/dashboard/list-universities/delete/{id}', [DashboardController::class, 'deleteUniversities'])->name('be.deleteuniversities');
