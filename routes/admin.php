<?php

use App\Http\Controllers\Admin\AchieverController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
        return view('admin.login.signin');
    })->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/store', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/user/password', [LoginController::class, 'showChangeForm'])->name('password.change');

    Route::post('/user/password', [LoginController::class, 'update'])->name('password.update');
    Route::resource('slider', SliderController::class);
    Route::resource('notice', NoticeController::class);
    Route::resource('event', EventController::class);
    Route::resource('alumni', AlumniController::class);
    Route::delete('gallery/{gallery}/image/{index}', [GalleryController::class, 'deleteImage'])
        ->name('gallery.image.delete');

    Route::resource('gallery', GalleryController::class);
    Route::resource('publications', PublicationController::class);
    Route::resource('achievers', AchieverController::class)->except(['show']);


    Route::get('achievers/create/academic', [AchieverController::class, 'create'])
        ->name('achievers.create.academic')
        ->defaults('type', 'academic');

    Route::get('achievers/create/star', [AchieverController::class, 'create'])
        ->name('achievers.create.star')
        ->defaults('type', 'star');


    Route::get('achievers/academic', [AchieverController::class, 'index'])
        ->name('achievers.index.academic')
        ->defaults('type', 'academic');

    Route::get('achievers/star', [AchieverController::class, 'index'])
        ->name('achievers.index.star')
        ->defaults('type', 'star');
        Route::get('list/contact',[ContactUsController::class, 'contant_list']);

});

