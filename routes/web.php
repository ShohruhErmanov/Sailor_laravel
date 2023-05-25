<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/team', [FrontController::class, 'team'])->name('team');
Route::get('/testimonials', [FrontController::class, 'testimonials'])->name('testimonials');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('pricing');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');


