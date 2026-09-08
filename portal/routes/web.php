<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/advertisers', 'advertisers')->name('advertisers');
Route::view('/publishers', 'publishers')->name('publishers');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/integration', 'integration')->name('integration');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
