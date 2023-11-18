<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\UserAuth;
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

Route::middleware([UserAuth::class])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::GET('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
        Route::GET('/home', [HomeController::class, 'index'])->name('home.view');
        Route::GET('/property/list', [PropertyController::class, 'index'])->name('property.view');
        Route::GET('/property/add', [PropertyController::class, 'add'])->name('property.add');
        Route::GET('/property/edit/{id}', [PropertyController::class, 'edit'])->name('property.edit');
        Route::POST('/property/create', [PropertyController::class, 'create'])->name('property.create');
        Route::PUT('/property/update/{id}', [PropertyController::class, 'update'])->name('property.update');
        Route::POST('/property/update/address/{id}', [PropertyController::class, 'updateAddress'])->name('update.address');
        Route::GET('/property/delete/{id}', [PropertyController::class, 'delete'])->name('property.delete');

        Route::POST('/gallary/upload/{id}/{type}', [GallaryController::class, 'uplaodImage'])->name('gallary.upload');
        Route::GET('/gallary/list/{id}', [GallaryController::class, 'gallary'])->name('gallary.list');
        Route::GET('/gallary/delete/{id}', [GallaryController::class, 'deleteGallary'])->name('gallary.dete');

        Route::POST('/feature/store/{id}/{type}', [FeatureController::class, 'addFeature'])->name('feature.add');
        Route::GET('/feature/list/{id}', [FeatureController::class, 'features'])->name('feature.list');
        Route::GET('/feature/delete/{id}', [FeatureController::class, 'deleteFeature'])->name('feature.dete');

        Route::GET('/project', [ProjectController::class, 'index'])->name('project.view');

        Route::GET('/blog/list', [BlogController::class, 'index'])->name('blog.view');
        Route::POST('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::POST('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::GET('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');

        Route::GET('/contact', [ContactController::class, 'index'])->name('contact.view');
        Route::GET('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');

        Route::GET('/subscribe', [SubscribeController::class, 'index'])->name('subscribe.view');
        Route::GET('/subscribe/delete/{id}', [SubscribeController::class, 'delete'])->name('subscribe.delete');

        Route::GET('/user/list', [UserController::class, 'index'])->name('users.view');
        Route::POST('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::POST('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::GET('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

        Route::GET('/profile', [UserController::class, 'profile'])->name('profile.view');

        Route::GET('/settings', [SettingController::class, 'index'])->name('setting.view');
        Route::POST('/settings/update/{id}', [SettingController::class, 'update'])->name('setting.update');
    });
});
