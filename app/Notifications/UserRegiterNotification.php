<?php

namespace App\Notifications;

use App\Mail\TestNotificationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegiterNotification extends Notification
{
    use Queueable;

    public $post = ['titre'=>'Super titre'];
    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct($user, $post)
    {
        $this->user=$user;
        $this->post=$post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable)
    {
        return (new TestNotificationMail($notifiable, $this->post))
                ->to($notifiable->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'titre'=> 'mon titre est'. $this->post['titre'],
            'mon_email'=>$notifiable->email
        ];
    }
}
