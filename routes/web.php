<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SeoPageController;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [BlogController::class, 'home'])->name('home');

Route::post('/send-admission-enquiry', [App\Http\Controllers\AdmissionController::class, 'send'])
    ->name('send.admission.enquiry');

Route::get('/admission', function () {
    return view('admission');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/facilities', function () {
    return view('facilities');
});
Route::get('/notice-board', function () {
    return view('notice-board');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::post('/contact-send', [ContactController::class, 'send'])
    ->name('contact.send');

Route::get('/our-gallery', function () {
    return view('our-gallery');
});
Route::get('/admission-process', function () {
    return view('admission-process');
});

Route::view('/co-curricular-activities', 'beyond-classroom.co-curricular-activities')
    ->name('beyond.co-curricular');

Route::view('/events-and-celebrations', 'beyond-classroom.events-and-celebrations')
    ->name('beyond.events');

Route::view('/scholastic-activities', 'beyond-classroom.scholastic-activities')
    ->name('beyond.scholastic');

Route::view('/scout-and-ncc', 'beyond-classroom.scout-and-ncc')
    ->name('beyond.scout-ncc');

Route::view('/sports-arena', 'beyond-classroom.sports-arena')
    ->name('beyond.sports');

Route::view('/studio-and-club', 'beyond-classroom.studio-and-club')
    ->name('beyond.studio-club');

Route::view('/tours-and-excursions', 'beyond-classroom.tours-and-excursions')
    ->name('beyond.tours');


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog.store');



Route::get('/{slug}', [SeoPageController::class, 'show'])
    ->where('slug', '[a-z0-9\-]+');



    
