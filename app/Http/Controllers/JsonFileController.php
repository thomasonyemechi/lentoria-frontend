<?php

namespace App\Http\Controllers;

use App\Notifications\FetchTopicsToJsonFile;
use Exception;
use Illuminate\Http\Client\Response;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class JsonFileController extends Controller
{
    use Notifiable;

    public function runAllJson()
    {
        $this->allCoursesJson();
        $this->updateFile();
        $this->indexPageJsonFile();
        $this->categoriesNdSubscategoriesJsonFile();
        $this->categoriesJsonFile();
    }

    public function allCoursesJson()
    {
        $api_url = config('app.api_url');
        $path = public_path('json_files/all-courses.json');

        try {
            $contents = Http::get($api_url . '/all-courses');
            $this->putContents($contents, $path, "courses");
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("An error occurred while performing cron job for the courses file: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    /**
     * @param Response $contents
     * @param mixed $path
     * @param string $filename
     * @return void
     */
    public function putContents(Response $contents, string $path, string $filename): void
    {
        if ($contents->successful()) {
            if (!File::exists($path)) {
                File::put($path, $contents);
                info("$filename Json File Created and Updated Successfully");
                Notification::route('mail', config('mail.admin_mail'))
                    ->notify(new FetchTopicsToJsonFile("$filename json file created and contents added successfully"));
            } else {
                File::replace($path, $contents);
                info("$filename Json File Updated Successfully");
                Notification::route('mail', config('mail.admin_mail'))
                    ->notify(new FetchTopicsToJsonFile("$filename json file updated successfully"));
            }
        } else {
            info($contents);
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile('An error occurred with the api server'));
        }
    }

    public function updateFile()
    {
        $api_url = config('app.api_url');
        $file = public_path('json_files/subcategories.json');

        try {
            $contents = Http::post($api_url . '/topics_by_categories');
            $this->putContents($contents, $file, 'subcategories');
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("An error occurred while performing cron job for the subcategories json file: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    public function indexPageJsonFile()
    {
        $api_url = config('app.api_url');
        $file = public_path('json_files/course_by_type.json');

        try {
            $contents = Http::get($api_url . '/courses');

            $this->putContents($contents, $file, "index page");
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("An error occurred while performing cron job for the index page file: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    public function categoriesNdSubscategoriesJsonFile()
    {
        $api_url = config('app.api_url');
        $path = public_path('json_files/categories_and_subcategories.json');

        try {
            $contents = Http::get($api_url . '/category');
            $this->putContents($contents, $path, 'categories and subcategories');
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("error occurred while performing cron job for the categories and subcategories File: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }

    public function categoriesJsonFile()
    {
        $api_url = config('app.api_url');
        $path = public_path('json_files/categories.json');

        try {
            $contents = Http::get($api_url . '/categories');
            $this->putContents($contents, $path, "categories");
        } catch (Exception $exception) {
            Notification::route('mail', config('mail.admin_mail'))
                ->notify(new FetchTopicsToJsonFile("An error occurred while performing cron job for the categories file: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }
    }
}
