<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Vimeo\Vimeo;

ini_set('memory_limit', '512M');
class VimeoController extends Controller
{
    public static function client()
    {
        return new Vimeo(env('VIMEO_CLIENT_ID'), env('VIMEO_CLIENT_SECRET'), env('VIMEO_ACCESS_TOKEN'));
    }
    public function testing()
    {
        $response = self::client()->request('/tutorial', array(), 'GET');
        return response($response);
    }

    public function uploadVideo(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'video' => 'required|mimes:mp4,mkv,ogg,ts',
        ]);

        if ($validate->fails()) {
            return response(['error' => 'Error Occured While Uploading'], 422);
        }
        $lec_id = $request->lecture_id;
        $video = $request->file('video');
        $check = Http::asForm()->withHeaders([
            'Authorization' => 'Bearer ' . access_token(),
        ])->post('https://api.lentoria.com/api/admin/get_video_link', [
        'lecture_id' => $lec_id,
        ]);
        if ($check['data'] == null || $check['data'] == "")
        {
            $uri = self::client()->upload($video, array(
            "name" => $request->title,
            "description" => $request->description,
        ));
        }
        else
        {
            $uri = self::client()->replace($check['data'], $video);
        }

        $status = self::client()->request($uri . '?fields=transcode.status');

        $response = self::client()->request($uri . '?fields=link');

        $link = $response['body']['link'];




        $res = Http::asForm()->withHeaders([
            'Authorization' => 'Bearer ' . access_token()
        ])->post('https://api.lentoria.com/api/admin/update_lecture_video', [
            'lecture_id' => $lec_id,
            'uri' => $uri,
        ]);
        return $res;
    }


    public function getOembed($link)
    {
        $response = Http::asForm()->get('https://vimeo.com/api/oembed.json?url=' . $link);
        $html = json_decode($response)->html;

        return response(['html' => $html], 200);
        // return $response;
    }

    public function getOembed2(Request $request)
    {
        return $this->getOembed($request->link);
    }

    public function getTranscodingStatus(Request $request)
    {
        $status = self::client()->request('/' . $request->uri . '?fields=transcode.status');
        $link = $request->link;
        if ($status['body']['transcode']['status'] == 'complete') {
            return $this->getOembed($link);
        } elseif ($status['body']['transcode']['status'] == 'in_progress') {
            return response(['message' => 'Your video is still processing'], 401);
        } else {
            return response(['message' => 'Error occured while processing video'], 422);
        }
    }

    public function deleteVideo(Request $request)
    {
        $del = self::client()->request('/' . $request->uri, array(), 'DELETE');
        return response(['message' => $del]);
    }
}
