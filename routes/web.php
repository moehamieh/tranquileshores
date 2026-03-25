<?php

use App\Http\Controllers\FrontHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontHomeController::class, 'index'])->name('home-page');
Route::get('/services/{slug}', [FrontHomeController::class, 'service_details'])->name('service-details');
Route::get('/therapists/{slug}', [FrontHomeController::class, 'therapist_profile'])->name('therapist-profile');
Route::get('/alltherapists', [FrontHomeController::class, 'alltherapists'])->name('alltherapists');
Route::get('/allservices', [FrontHomeController::class, 'allservices'])->name('allservices');
Route::get('/contact-us', [FrontHomeController::class, 'contact_us'])->name('contact-us');
Route::get('/blogs', [FrontHomeController::class, 'blogs_index'])->name('blogs');
Route::get('/blogs/{slug}', [FrontHomeController::class, 'blog_details'])->name('blog-details');


