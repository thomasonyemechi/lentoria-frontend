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

    public function updateFile()
    {
        $api_url = config('app.api_url');
        $file = public_path('json_files/subcategories.json');

        try {
            $contents = Http::post($api_url . '/topics_by_categories');
            if($contents->successful()) {
                if(!File::exists($file)) {
                    File::put($file, $contents);
                    Notification::route('mail', 'temmyk7@gmail.com')
                                ->notify(new FetchTopicsToJsonFile('Subcategories Json File Created and Contents Added Successfully'));
                    info('File Created and Contents Added Successfully');
                } else {
                    File::replace($file, $contents);
                    Notification::route('mail', 'temmyk7@gmail.com')
                                ->notify(new FetchTopicsToJsonFile('Subcategories Json File Updated Successfully'));
                    info('File Updated Successfully');
                }
            }else {
                Notification::route('mail', 'temmyk7@gmail.com')
                            ->notify(new FetchTopicsToJsonFile('The api server as an error'));
                info('Cron Job Failed');
            }
        } catch(Exception $exception) {
            Notification::route('mail', 'temmyk7@gmail.com')
                        ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job For The Subcaregories Json File: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    public function indexPageJsonFile()
    {
        $api_url = config('app.api_url');
        $file = public_path('json_files/course_by_type.json');

        try {
            $contents = Http::get($api_url . '/fetchcourse_by_type');

            if($contents->successful()) {
                if(!File::exists($file)) {
                    File::put($file, $contents);
                    Notification::route('mail', 'temmyk7@gmail.com')
                                ->notify(new FetchTopicsToJsonFile('Index Page Json File Created and Contents Added Successfully'));
                    info('File Created and Contents Added Successfully');
                } else {
                    File::replace($file, $contents);
                    Notification::route('mail', 'temmyk7@gmail.com')
                                ->notify(new FetchTopicsToJsonFile('Index Page Json File Updated Successfully'));
                    info('File Updated Successfully');
                }
            } else {
                Notification::route('mail', 'temmyk7@gmail.com')
                            ->notify(new FetchTopicsToJsonFile('The api server as an error'));
                info('Cron Job Failed');
            }
        } catch(Exception $exception) {
            Notification::route('mail', 'temmyk7@gmail.com')
                        ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job For The Index Page File: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }
}
