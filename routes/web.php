<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::post('/session_login_infomation', [Controller::class, 'sessionLoginInfomation']);
Route::get('/', function () {
    return view('index');
});


Route::view('/course/{id}/{slug}', 'course_single');
Route::view('/instructor/{id}/profile', 'instructor_profile')->name('instructor_profile');
Route::view('activate_account', 'activation')->name('activation');

Route::group(['prefix' => 'instructor', 'as' => 'instructor.', 'middleware' => ['auth2']], function () {
    Route::get('/dashboard', function () {
        return view('instructor.index');
    });
    Route::view('/courses', 'instructor.courses')->name('courses');
    Route::view('/add_course', 'instructor.add_course')->name('add_course');
    Route::view('/course/{slug}', 'instructor.course')->name('course');
    Route::view('/course_message/{slug}', 'instructor.course_message')->name('course_message');
    Route::view('/goals/{slug}', 'instructor.learners')->name('learners');
    Route::view('/pricing/{slug}', 'instructor.pricing')->name('pricing');
    Route::view('/curriculum/{slug}', 'instructor.curriculum')->name('curriculum');
    Route::view('/faq/{slug}', 'instructor.faq')->name('faq');
    Route::view('/profile', 'instructor.instructor_profile')->name('instructor_profile');
    Route::view('/course_review', 'instructor.course_review')->name('course_review');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth2']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/category', function () {
        return view('admin.course_category');
    });
    Route::get('/topic', function () {
        return view('admin.course_topics');
    });
});

Route::get('/logout', function () {
    session()->flush();

    return redirect('/')->with('success', 'You have been logged out');
})->name('logout');