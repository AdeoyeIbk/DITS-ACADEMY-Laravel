<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/attendance', function () {
    return view('attendance');
})->name('attendance');

Route::get('/become-a-student', function () {
    return view('become-a-student');
})->name('become-a-student');

Route::get('/contact', function () {
    return view('contactUs');
})->name('contact');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/invite', function () {
    return view('invite');
})->name('invite');
Route::get('/live-classes', function () {
    return view('live-classes');
})->name('live-classes');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/tutors', function () {
    return view('tutors');
})->name('tutors');