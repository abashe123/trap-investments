<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');

Route::view('/car-rental', 'pages.car-rental');

Route::view('/food', 'pages.food');

Route::view('/real-estate', 'pages.real-estate');
