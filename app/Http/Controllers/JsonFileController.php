<?php

namespace App\Http\Controllers;

use App\Notifications\FetchTopicsToJsonFile;
use Exception;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class JsonFileController extends Controller

{
	use Notifiable;
	public function updateFile(){
		$api_url = config('app.api_url');
		$file = public_path('subcategories.json');

		try {
			$contents = Http::post($api_url . '/topics_by_categories');
			if(!File::exists($file)) {
				File::put($file, $contents);
				Notification::route('mail', 'temmyk7@gmail.com')
				            ->notify(new FetchTopicsToJsonFile('File Created and Contents Added Successfully'));
				info('File Created and Contents Added Successfully');
			} else {
				File::replace($file, $contents);
				Notification::route('mail', 'temmyk7@gmail.com')
				            ->notify(new FetchTopicsToJsonFile('File Updated Successfully'));
				info('File Updated Successfully');
			}
		} catch(Exception $exception) {
			Notification::route('mail', 'temmyk7@gmail.com')
			            ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job: " . $exception->getMessage(), 1));
			info($exception->getMessage());
		}
}
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
