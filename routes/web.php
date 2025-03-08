<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home.home');
})->name('home');

Route::get('/informasi', function () {
    return view('information.information');
})->name('information');


Route::get('/team', function () {
    return view('team.team');
})->name('team');

Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
})->name('portfolio');

Route::get('/sponsors', function () {
    return view('sponsor.sponsor');
})->name('sponsors');

Route::get('/testimonial', function () {
    return view('testimonial.testimonials');
})->name('testimonial');



// bigcode

Route::get('/big-code', function () {
    return view('bigcode.bigcode');
})->name('bigcode');

Route::get('/testimonial', function () {
    return view('testimonial.testimonials');
})->name('testimonial');

Route::get('/about', function () {
    return view('bigcode.pages.about');
})->name('about');

Route::get('/services', function () {
    return view('bigcode.pages.services');
})->name('services');

Route::get('/portofolio', function () {
    return view('bigcode.pages.portfolio');
})->name('portofolio');

Route::get('/our-team', function () {
    return view('bigcode.pages.team');
})->name('our-team');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
