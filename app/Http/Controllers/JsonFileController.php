<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class JsonFileController extends Controller
{

    public function index()
    {
        $response = Http::asForm()->post('http://127.0.0.1:8000/api/topics_by_categories');
        $response = json_decode($response);

        $jsonfile = public_path('subcategories.json');

        if(!File::exists($jsonfile)) {
            File::put($jsonfile, json_encode($response));
            return response("File created successfully");
        } else {
            File::replace($jsonfile, json_encode($response));
            return response("File replaced successfully");
        }
    }
}
