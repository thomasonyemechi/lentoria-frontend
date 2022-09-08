<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function sessionLoginInfomation(Request $request)
    {
        $data = $request->data;
        session()->put('info',$data);
        return;
    }

    public function updateInstructorSession(Request $request)
    {
        $data = Session::get('info');
        $data['instructor'] = 1;
        session()->put('info', $data);
    }
}
