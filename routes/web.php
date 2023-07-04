<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PagethreeController;
use App\Http\Controllers\PagefourController;
use App\Http\Controllers\PagefiveController;
use App\Http\Controllers\PagesixController;
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

Route::get('/', [IndexController::class, 'show']);

Route::get('/reiki', [PagesController::class, 'show']);

Route::get('/sevenReiki', [PagethreeController::class, 'show']);

Route::get('/fragmentosAlma', [PagefourController::class, 'show']);

Route::get('/acupunturaEterica', [PagefiveController::class, 'show']);

Route::get('/animalReiki', [PagesixController::class, 'show']);
