<?php

namespace App\Events;

use App\Chatroom;
use App\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $chatroom;

    public function __construct($message, $chatroom)
    {
        $this->message = $message;
        $this->chatroom = $chatroom;
        $this->dontBroadcastToCurrentUser();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $members = Chatroom::find($this->chatroom)->members;
        Log::debug($members);
        foreach ($members as $member) {
            $authenticated = auth()->user()->id;
            if ($member->id != $authenticated) {
                $receiver = $member;
            }
        }
        return [
            new PrivateChannel('messages-' . $this->chatroom),
            new PrivateChannel('App.User.' . $receiver->id),
        ];
    }

    // public function broadcastAs()
    // {
    //     return 'message';
    // }
}