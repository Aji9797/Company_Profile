<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

//home
route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio']);
route::get('/services', [App\Http\Controllers\HomeController::class, 'services']);
route::get('/team', [App\Http\Controllers\HomeController::class, 'team']);
route::get('/testimonials', [App\Http\Controllers\HomeController::class, 'testimonials']);


//auth
route::get('/login', [AuthController::class, 'login'])-> name('login');
route::post('/login', [AuthController::class, 'authenticated']);
route::get('/logout', [AuthController::class, 'logout']);


//Dashboard
route::get('/dashboard', [DashboardController::class, 'index'])-> middleware('auth'); // Ensure user is authenticated