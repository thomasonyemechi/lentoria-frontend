<?php

use App\Http\Controllers\VimeoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('vimeo_testing', [VimeoController::class, 'testing']);

Route::post('upload_video', [VimeoController::class, 'uploadVideo']);

Route::post('delete_video', [VimeoController::class, 'deleteVideo']);

Route::post('get_oembed', [VimeoController::class, 'getOembed2']);