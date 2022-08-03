<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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




Route::post('/session_login_infomation',[Controller::class, 'sessionLoginInfomation']);
Route::get('/', function () { return view('index'); });


Route::group(['prefix'=>'instructor', 'as'=>'instructor.', 'middleware'=> ['auth2'] ], function (){
    Route::get('/dashboard', function () { return view('instructor.index'); });
    Route::view('/courses', 'instructor.courses')->name('courses');
    Route::view('/add_course', 'instructor.add_course')->name('add_course');
    Route::view('/course', 'instructor.course')->name('course');
});


Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=> ['auth2'] ], function (){
    Route::get('/dashboard', function () { return view('admin.dashboard'); });
    Route::get('/category', function () { return view('admin.course_category'); });
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/')->with('success' , 'You have been logged out');
});