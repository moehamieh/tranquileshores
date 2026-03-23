<?php

use App\Http\Controllers\FrontHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontHomeController::class, 'index'])->name('home-page');
Route::get('/service-details', [FrontHomeController::class, 'service_details'])->name('service-detail');
Route::get('/therapist-profile', [FrontHomeController::class, 'therapist_profile'])->name('therapist-profile');
Route::get('/contact-us', [FrontHomeController::class, 'contact_us'])->name('contact-us');
Route::get('/blog-details', [FrontHomeController::class, 'blog_details'])->name('blog-details');


