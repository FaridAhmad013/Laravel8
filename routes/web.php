<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/kelompok6', [PostController::class, 'index']);
// Route::view('/kelompok6', 'welcome');
