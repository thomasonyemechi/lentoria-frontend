<?php

namespace App\Console\Commands;

use App\Notifications\FetchTopicsToJsonFile;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class GetTopicsFromApi extends Command
{
    use Notifiable;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:topics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is to get topics from the backend api from and store in JSON file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
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
            Notification::route('mail', config('mail.from.address'))
                        ->notify(new FetchTopicsToJsonFile("An Error Occured While Performing Cron Job: " . $exception->getMessage(), 1));
            info($exception->getMessage());
        }


        return 0;
    }
}
