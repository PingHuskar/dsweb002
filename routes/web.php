<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/{$name}', function ($name) {
//     return echo "university.$name";
//     return view("university.$name");
// });

Route::get('/index', function () {
    return view("university.index");
});

Route::get('/about', function () {
    return view("university.about");
});

Route::get('/facilities', function () {
    return view("university.facilities");
});

Route::get('/admissions', function () {
    return view("university.admissions");
});

Route::get('/courses', function () {
    return view("university.courses");
});

Route::get('/accommodation', function () {
    return view("university.accommodation");
});

Route::get('/jobs', function () {
    return view("university.jobs");
});

Route::get('/student-portal', function () {
    return view("university.student-portal");
});

Route::get('/research', function () {
    return view("university.research");
});

Route::get('/library', function () {
    return view("university.library");
});

Route::get('/gallery', function () {
    return view("university.gallery");
});

Route::get('/blog', function () {
    return view("university.blog");
});

Route::get('/contact', function () {
    return view("university.contact");
});

Route::get('/staff', function () {
    return view("university.staff");
});

Route::get('/vision', function () {
    return view("university.vision");
});

// Route::get('/member',[MemberController::class,'index']) -> name('mem');

// Route::get('/{name}', function ($name) {
//     return view("$name");
//     // echo "<h1>Hello World</h1>";
//     // echo "Hello World";
// });



// Route::get('/user/{name}', function ($name) {
//     echo "Hello <bdo dir='rtl'>$name</bdo></h1>";
// });