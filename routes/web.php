<?php

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

Route::get('/', function () {
    return redirect('instructor/dashboard');
});



Route::group(['prefix'=>'instructor', 'as'=>'instructor', 'middleware'=> [] ], function (){
    Route::get('/dashboard', function () { return view('instructor.index'); });
});


Route::group(['prefix'=>'admin', 'as'=>'admin', 'middleware'=> [] ], function (){
    Route::get('/dashboard', function () { return view('instructor.index'); });
});
Route::view('/','instructor.index');
Route::view('/courses', 'instructor.course')->name('instructor.courses');

Route::view('/add_course','instructor.add-course')->name('instructor.add-course');
