<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
