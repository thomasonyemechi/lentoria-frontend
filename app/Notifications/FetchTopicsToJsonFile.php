<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FetchTopicsToJsonFile extends Notification
{
    use Queueable;

    private string $message;
    private int $type;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message, $type = 0)
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        //mail,database,broadcast,vonage and slack
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Hello Admin!')
            ->subject('Topics Json File')
            ->line($this->message)
            ->line($this->type === 1 ? 'An Error Occured While Performing Cron Job' : 'Cron Job Performed Successfully');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
