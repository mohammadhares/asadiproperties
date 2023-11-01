<?php

use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\WebsiteController;
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

Route::GET('/', [WebsiteController::class, 'home']);
Route::GET('/rent', [WebsiteController::class, 'rent']);
Route::GET('/sale', [WebsiteController::class, 'sale']);
Route::GET('/offplane', [WebsiteController::class, 'offplane']);
Route::GET('/contact', [WebsiteController::class, 'contact']);
Route::GET('/blog', [WebsiteController::class, 'blog']);
Route::GET('/about', [WebsiteController::class, 'about']);
Route::POST('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');
