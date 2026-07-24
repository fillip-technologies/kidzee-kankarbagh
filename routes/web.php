<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EducatorsController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('franchise', [HomeController::class, 'franchise'])->name('franchise');



Route::get('ourstory', [HomeController::class, 'ourstory'])->name('ourstory');



Route::get('missionvision', [HomeController::class, 'missionvision'])->name('missionvision');

// principalmessage
Route::get('principalmessage', [HomeController::class, 'principalmessage'])->name('principalmessage');

Route::get('directormessage', [HomeController::class, 'directormessage'])->name('directormessage');


Route::get('team', [HomeController::class, 'team'])->name('team');

// 
Route::get('admissionenquiry', [HomeController::class, 'admissionenquiry'])->name('admissionenquiry');

Route::get('playgroup', [HomeController::class, 'playgroup'])->name('playgroup');

// gallery
Route::get('image-gallery', [HomeController::class, 'gallerycollins'])->name('gallerycollins');

// nursery
Route::get('nursery', [HomeController::class, 'nursery'])->name('nursery');

// kinder
Route::get('kindergarten', [HomeController::class, 'kindergartencollins'])->name('kindergartencollins');

// kinder
Route::get('facilities', [HomeController::class, 'facilitiescollinskids'])->name('facilitiescollinskids');
Route::get('career/list', [HomeController::class, 'get_carees']);
// kinder
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('store/contact', [HomeController::class, 'contact_store'])->name('contact.store');

Route::get('/teachers', [EducatorsController::class, 'indexteacher']);
Route::get('/teachers/list', [EducatorsController::class, 'listTeacher']);
Route::post('teachers/store', [EducatorsController::class, 'store'])->name('admin.teacher.store');
Route::get('/teachers/edit/{id}', [EducatorsController::class, 'edit_teacher'])->name('admin.teacher.edit');
Route::put('/teachers/update/{id}', [EducatorsController::class, 'update'])->name('admin.teacher.update');
Route::delete('/teachers/delete/{id}', [EducatorsController::class, 'teacher_delete'])->name('admin.teacher.destroy');