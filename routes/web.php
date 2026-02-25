<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');

Route::view('/car-rental', 'pages.car-rental');
Route::view('/food', 'pages.food');
Route::view('/real-estate', 'pages.real-estate');


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/car-rental', [CompanyController::class, 'carRental']);
// Route::get('/food', [CompanyController::class, 'food']);
// Route::get('/real-estate', [CompanyController::class, 'realEstate']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/contact', [PageController::class, 'contact']);
// Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
