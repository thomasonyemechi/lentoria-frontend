<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function sessionLoginInfomation(Request $request)
    {
        $data = $request->data;
        session()->put('info', $data);
        return;
    }

    public function updateInstructorSession(Request $request)
    {
        $data = Session::get('info');
        $data['instructor'] = 1;
        session()->put('info', $data);
    }


    function fetchCourseInfoByLink($link)
    {
        $res = Http::asForm()->get(env('BACKEND') . 'api/get_course_from_link/' . $link);
        $res = json_decode($res);
        if ($res->data) {
            $data = $res->data;
            return redirect('/course/' . $data->id . '/' . $data->slug);
        } else {
            throw new NotFoundHttpException();
        }
    }
}
