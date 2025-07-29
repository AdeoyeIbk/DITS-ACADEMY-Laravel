<?php

use Illuminate\Support\Facades\Route;

//testimonials data
$testimonials = [
    [
        'image' => asset('images/testimonial-pics/black female portrait.png'),
        'alt' => 'data analyst graduate',
        'name' => 'Sarah Williams',
        'role' => 'Data Analyst',
        'text' => 'The Data Analytics course at DITS Academy gave me practical skills and confidence to land my first tech job.'
    ],
    [
        'image' => asset('images/testimonial-pics/black male.png'),
        'alt' => 'web dev graduate',
        'name' => 'Michael Ojo',
        'role' => 'Front-End Developer',
        'text' => 'Excellent instructors and a supportive community. I built real projects and improved my portfolio.'
    ],
    [
        'image' => asset('images/testimonial-pics/middle aged woman.png'),
        'alt' => 'cybersecurity specialist',
        'name' => 'Aisha Bello',
        'role' => 'Cybersecurity Specialist',
        'text' => 'The cybersecurity program was hands-on and up-to-date. I now feel ready for industry challenges.'
    ],
    [
        'image' => asset('images/testimonial-pics/young black male.png'),
        'alt' => 'graphics design graduate',
        'name' => 'Emeka Nwosu',
        'role' => 'Graphic Designer',
        'text' => 'Creative assignments and expert feedback helped me sharpen my design skills and get freelance gigs.'
    ],
    [
        'image' => asset('images/testimonial-pics/young black female.png'),
        'alt' => 'Microsoft Essentials graduate',
        'name' => 'Grace Eze',
        'role' => 'Office Administrator',
        'text' => 'Learning Microsoft Office at DITS Academy made my daily work much easier and more efficient.'
    ],
    [
        'image' => asset('images/testimonial-pics/middle aged black male.png'),
        'alt' => 'Data Analysis expert',
        'name' => 'Samuel Adeyemi',
        'role' => 'Software Engineer',
        'text' => 'I recommend DITS Academy to anyone starting out in tech. The mentorship and resources are top-notch.'
    ]
];

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () use ($testimonials) {
    return view('about', ['testimonials' => $testimonials]);
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
Route::get('/Reset-Password', function () {
    return view('Reset-Password');
})->name('Reset-Password');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/testimonials', function () use ($testimonials) {
    return view('testimonials', ['testimonials' => $testimonials]);
})->name('testimonials');

Route::get('/tutors', function () {
    return view('tutors');
})->name('tutors');