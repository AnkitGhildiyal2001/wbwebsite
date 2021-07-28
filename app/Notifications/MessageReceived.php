<?php

namespace App\Notifications;

use App\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageReceived extends Notification
{
    use Queueable;
    public $object;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [
            'database',
            'broadcast',
        ];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toBroadcast($notifiable)
    {
        $sender = User::find($this->object->user_id);
        $timestamp = Carbon::now()->addSecond()->toDateTimeString();
        return new BroadcastMessage(array(
            'notifiable_id' => $notifiable->id,
            'notifiable_type' => get_class($notifiable),
            'data' => $this->object,
            'read_at' => $notifiable->read_at,
            'sender' => $sender->firstname . ' ' . $sender->lastname,
            'created_at' => $timestamp,
            'time' => $this->object->created_at->diffForHumans(),
            'updated_at' => $timestamp,
        ));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return (array) $this->object;
    }
}