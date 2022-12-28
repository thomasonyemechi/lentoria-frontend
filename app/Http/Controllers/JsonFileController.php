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
            if ($contents->successful()) {
                if (!File::exists($file)) {
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
            } else {
                Notification::route('mail', 'temmyk7@gmail.com')
                    ->notify(new FetchTopicsToJsonFile('The api server as an error'));
                info('Cron Job Failed');
            }
        } catch (Exception $exception) {
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
            $contents = Http::get($api_url . '/courses');

            if ($contents->successful()) {
                if (!File::exists($file)) {
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
        } catch (Exception $exception) {
            Notification::route('mail', 'temmyk7@gmail.com')
                ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job For The Index Page File: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    public function categoriesNdSubscategoriesJsonFile()
    {
        $api_url = config('app.api_url');
        $path = public_path('json_files/categories_and_subcategories.json');

        try {
            $contents = Http::get($api_url . '/category');
            if ($contents->successful()) {
                if (!File::exists($path)) {

                    File::put($path, $contents);
                    Notification::route('mail', config('mail.admin_mail'))
                        ->notify(new FetchTopicsToJsonFile('Categories and Subcategories Json File Created and Contents Added Successfully'));
                    info("Categories and Subcategories Json File Created and Updated Successfully");

                } else {
                    File::replace($path, $contents);
                    Notification::route('mail', config('mail.admin_mail'))
                        ->notify(new FetchTopicsToJsonFile('Categories and Subcategories Json File Updated Successfully'));
                    info("Categories and Subcategories Json File Updated Successfully");
                }
            } else {
                Notification::route('mail', config('mail.admin_mail'))
                    ->notify(new FetchTopicsToJsonFile('The api server as an error'));
                info($contents);
            }
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job For The Categories and Subcategories File: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    public function categoriesJsonFile()
    {
        $api_url = config('app.api_url');
        $path = public_path('json_files/categories.json');

        try {
            $contents = Http::get($api_url . '/category');
            if ($contents->successful()) {
                if (!File::exists($path)) {
                    File::put($path, $contents);
                    info("Categories Json File Created and Updated Successfully");
                    Notification::route('mail', config('mail.admin_mail'))
                        ->notify(new FetchTopicsToJsonFile('Categories and Subcategories Json File Created and Contents Added Successfully'));
                } else {
                    File::replace($path, $contents);
                    info("Categories Json File Updated Successfully");
                    Notification::route('mail', config('mail.admin_mail'))
                        ->notify(new FetchTopicsToJsonFile('Categories Json File Updated Successfully'));
                }
            } else {
                info($contents);
                Notification::route('mail', config('mail.admin_mail'))
                    ->notify(new FetchTopicsToJsonFile('An error occurred with the api server'));
            }
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job For The Categories and Subcategories File: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }


    function runAllJson()
    {
        $this->updateFile();
        $this->indexPageJsonFile();
        $this->categoriesNdSubscategoriesJsonFile();
        $this->categoriesJsonFile();
        return;
    }
}
