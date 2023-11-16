<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
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
Route::GET('/dashboard/login', [AuthController::class, 'index'])->name('login.view');
Route::POST('/auth/login', [AuthController::class, 'login'])->name('login.auth');

Route::prefix('dashboard')->group(function () {
    Route::GET('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::GET('/home', [HomeController::class, 'index'])->name('home.view');

    Route::GET('/property', [PropertyController::class, 'index'])->name('property.view');
    Route::GET('/add/property', [PropertyController::class, 'add'])->name('property.add');
    Route::GET('/edit/property/{id}', [PropertyController::class, 'edit'])->name('property.edit');
    Route::POST('/property/create', [PropertyController::class, 'create'])->name('property.create');
    Route::PUT('/property/update/{id}', [PropertyController::class, 'update'])->name('property.update');
    Route::POST('/property/update/address/{id}', [PropertyController::class, 'updateAddress'])->name('update.address');
    Route::GET('/property/delete/{id}', [PropertyController::class, 'delete'])->name('property.delete');
    Route::POST('/upload/image/{id}/{type}', [PropertyController::class, 'uplaodImage'])->name('upload.image');
    Route::POST('/feature/store/{id}/{type}', [PropertyController::class, 'addFeature'])->name('feature.add');
    Route::GET('/property/gallary/{id}', [PropertyController::class, 'gallary'])->name('property.gallary');
    Route::GET('/property/gallary/delete/{id}', [PropertyController::class, 'deleteGallary'])->name('gallary.dete');



    Route::GET('/project', [ProjectController::class, 'index'])->name('project.view');

    Route::GET('/blog', [BlogController::class, 'index'])->name('blog.view');

    Route::GET('/contact', [ContactController::class, 'index'])->name('contact.view');

    Route::GET('/subscribe', [SubscribeController::class, 'index'])->name('subscribe.view');

    Route::GET('/users', [UserController::class, 'index'])->name('users.view');

    Route::GET('/profile', [UserController::class, 'profile'])->name('profile.view');

    Route::GET('/settings', [SettingController::class, 'index'])->name('setting.view');

});
