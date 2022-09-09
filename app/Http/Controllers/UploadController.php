<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

ini_set('memory_limit', '512M');
class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'video' => 'required|mimes:mp4,mkv,ogg,ts',
        ]);
        if ($validate->fails()) {
            return response(['errors' => $validate->errors()->all()], 422);
        }
        $lec_id = $request->lecture_id;
        $duration = $request->duration;

        $video = $request->file('video');

        $response = Http::attach('video', file_get_contents($request->file('video')), $request->file('video')->hashName())->post('127.0.0.1:8000/api/vid', [
            'lecture_id' => $lec_id,
            'duration' => $duration,
        ]);
        return $response;
    }

    public function upload_image_cke(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

}
