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
Route::GET('/services', [WebsiteController::class, 'services']);
Route::POST('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');
Route::GET('/termsof', [WebsiteController::class, 'termsof']);
Route::GET('/privaecy', [WebsiteController::class, 'privaecy']);
Route::GET('/pricing', [WebsiteController::class, 'pricing']);
Route::GET('/careers', [WebsiteController::class, 'careers']);
Route::GET('/FAQs', [WebsiteController::class, 'FAQs']);
Route::GET('/sitemap', [WebsiteController::class, 'sitemap']);
Route::GET('/propery/{id}', [WebsiteController::class, 'singleProperty'])->name('single.property');
Route::GET('/project/{id}', [WebsiteController::class, 'singleProject'])->name('single.project');
Route::GET('/blog/{id}', [WebsiteController::class, 'singleBlog'])->name('single.blog');
Route::GET('/search', [WebsiteController::class, 'search'])->name('search');
Route::GET('/advance-search', [WebsiteController::class, 'advanceSearch'])->name('advance.search');
Route::POST('/contact', [WebsiteController::class, 'storeContact'])->name('store.contact');
