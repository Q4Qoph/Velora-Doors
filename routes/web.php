<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/our-doors', [HomeController::class, 'doors'])->name('doors');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-us', [HomeController::class, 'sendContact'])->name('contact.send');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);


// 301 redirects from old URLs
Route::redirect('/about', '/about-us', 301);
Route::redirect('/doors', '/our-doors', 301);
Route::redirect('/contact', '/contact-us', 301);


