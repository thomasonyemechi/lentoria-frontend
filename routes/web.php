<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonFileController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\VimeoController;
use Illuminate\Support\Facades\Route;


Route::post('/session_login_infomation', [Controller::class, 'sessionLoginInfomation']);
Route::view('/', 'index')->name('index');

Route::post('/addtosession', [Controller::class, 'updateInstructorSession']);

Route::get('/c/{link}/{ref?}', [Controller::class, 'fetchCourseInfoByLink']);

Route::get('/jsonfile', [JsonFileController::class, 'updateFile']);
Route::get('/indexpagefile', [JsonFileController::class, 'indexPageJsonFile']);
Route::get('/cats_and_subcats_file', [JsonFileController::class, 'categoriesNdSubscategoriesJsonFile']);
Route::get('/cats_file', [JsonFileController::class, 'categoriesJsonFile']);

Route::get('/demo', function () {
    return view('instructor.demo');
});

Route::view('coming-soon', 'coming-soon')->name('coming-soon');
Route::view('/course/{id}/{slug}', 'course_single');
Route::view('/instructor/{id}/profile', 'instructor_profile')->name('instructor_profile');
Route::view('activate_account', 'activation')->name('activation');
Route::view('become-instructor', 'become_instructor')->name('become_instructor');
Route::view('become-affiliate', 'affiliate')->name('affiliate');
Route::view('checkout/course/{slug}', 'checkout')->name('course.checkout');
Route::view('checkout/instructor_activation/{id}/{package_id}',
    'checkout')->name('instructor.activation.checkout')->whereIn('id', [3, 4, 5]);
Route::view('checkout/affiliate_activation/{id}/{package_id}',
    'checkout')->name('affliate.activation.checkout')->whereIn('id', [2, 3, 4]);
Route::view('checkout_success/course', 'checkout_success')->name('checkout_success.course');
Route::view('checkout_success/activation', 'checkout_success')->name('checkout_success.activation');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy', 'privacy')->name('privacy');
Route::middleware(['auth2'])->prefix('affiliate')->as('affiliate.')->group(function () {
    Route::view('active-users', 'affiliate.activeusers')->name('active-users');
    Route::view('compensation', 'affiliate.compensation')->name('compensation');
    Route::view('dashboard', 'affiliate.dashboard')->name('dashboard');
    Route::view('how', 'affiliate.how')->name('how');
    Route::view('leadership', 'affiliate.leadership')->name('leadership');
    Route::view('linkshared', 'affiliate.linkshared')->name('linkshared');
    Route::view('marketing', 'affiliate.marketing')->name('marketing');
    Route::view('membership', 'affiliate.membership')->name('membership');
    Route::view('statistics', 'affiliate.statistics')->name('statistics');
    Route::view('terms', 'affiliate.terms')->name('terms');
    Route::view('inactive-users', 'affiliate.inactiveusers')->name('inactive-users');
});

Route::prefix('my-courses')->as('my-courses.')->middleware(['auth2'])->group(function () {
    Route::view('learning', 'student.index')->name('learning');
    Route::view('/{slug}', 'student.classroom')->name('classroom');
});

Route::prefix('instructor')->as('instructor.')->middleware(['auth2', 'instructor'])->group(function () {
    Route::view('/dashboard', 'instructor.index')->name('dashboard');
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
    Route::post('cke_upload', [UploadController::class, 'upload_image_cke'])->name('ckeditor.upload');
    Route::view('/classroom/{slug}', 'instructor.classroom')->name('classroom');
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

    Route::get('/course/{id}/{slug}', function ($id, $slug) {
        $published = $_GET['published'];
        if ($published = 5) {
            return view('course_single');
        }
        return back()->with('error', 'You cannot access the page');
    });
    Route::get('/course_review/{slug}', function ($slug) {
        $published = $_GET['published'] ?? 0;
        return $published == 5 ? view('instructor.course_review', compact('slug')) : back()->with('error', 'You cannot access the page');
    });

    Route::view('/courses', 'admin.all_courses');
    Route::view('/under_review', 'admin.review_courses');
    Route::view('/published_courses', 'admin.published_courses');
    Route::view('/purchase_history', 'admin.course_purchase_history');
});

Route::get('/logout', function () {
    session()->flush();

    return redirect('/')->with('success', 'You have been logged out');
})->name('logout');
