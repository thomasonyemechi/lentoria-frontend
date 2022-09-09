<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VimeoController;

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

Route::post('/addtosession', [Controller::class, 'updateInstructorSession']);

Route::get('/c/{link}', [Controller::class, 'fetchCourseInfoByLink']);




Route::view('/virtual_class', 'virtual_class.classroom');

Route::view('/course/{id}/{slug}', 'course_single');
Route::view('/instructor/{id}/profile', 'instructor_profile')->name('instructor_profile');
Route::view('activate_account', 'activation')->name('activation');
Route::view('become-instructor', 'become_instructor')->name('become_instructor');
Route::view('become-affiliate', 'affiliate')->name('affiliate');
Route::view('checkout/course/{slug}', 'checkout')->name('course.checkout');
Route::view('checkout/instructor_activation/{id}/{package_id}', 'checkout')->name('instructor.activation.checkout');
Route::view('checkout/affiliate_activation/{id}/{package_id}', 'checkout')->name('affliate.activation.checkout');
Route::view('checkout_success/course', 'checkout_success')->name('checkout_success.course');
Route::view('checkout_success/activation', 'checkout_success')->name('checkout_success.activation');


Route::group(['prefix' => 'instructor', 'as' => 'instructor.', 'middleware' => ['auth2', 'instructor']], function () {
    Route::get('/dashboard', function () {
        return view('instructor.index');
    })->name('dashboard');
    Route::view('/courses', 'instructor.courses')->name('courses');
    Route::view('/add_course', 'instructor.add_course')->name('add_course');
    Route::view('/course/{slug}', 'instructor.course')->name('course');
    Route::view('/course_message/{slug}', 'instructor.course_message')->name('course_message');
    Route::view('/goals/{slug}', 'instructor.learners')->name('learners');
    Route::view('/pricing/{slug}', 'instructor.pricing')->name('pricing');
    Route::view('/curriculum/{slug}', 'instructor.curriculum')->name('curriculum');
    Route::view('/faq/{slug}', 'instructor.faq')->name('faq');
    Route::view('/profile', 'instructor.instructor_profile')->name('instructor_profile');
    Route::view('/course_review/{slug}', 'instructor.course_review')->name('course_review');
    Route::get('vimeo_testing', [VimeoController::class, 'testing']);
    Route::post('upload_video', [VimeoController::class, 'uploadVideo']);
    Route::post('delete_video', [VimeoController::class, 'deleteVideo']);
    Route::post('get_oembed', [VimeoController::class, 'getOembed2']);
    Route::post('get_vimeo_status', [VimeoController::class, 'getTranscodingStatus']);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth2', 'admin']], function () {
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