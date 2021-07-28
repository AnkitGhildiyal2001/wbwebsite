<?php

namespace App;

use App\Events\MessageSent;
use App\Notifications\MessageReceived;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;

class Message extends Model
{
    use Notifiable;

    protected $fillable = [
        'content',
        'type',
        'campaign_id',
        'chatroom_id',
        'user_id',
    ];

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = Crypt::encryptString($value);
    }

    public function getContentAttribute($value)
    {
        try {
            $value = Crypt::decryptString($value);
        } catch (DecryptException $e) {
            //
        }

        return  $value;
    }

    public function chatroom()
    {
        return $this->belongsTo(Chatroom::class);
    }
    
    public function sendNotification() 
    {
      $message  = $this;
      $receiver = false;
      broadcast(new MessageSent($message->content, $message->chatroom_id))->toOthers();
      $members = Chatroom::find($message->chatroom_id)->members;
      foreach ($members as $member) {
          $authenticated = auth()->user() ? auth()->user()->id : 0;
          if ($member->id != $authenticated) {
              $receiver = $member;
              $receiver->notify(new MessageReceived($message));
          }
      }
    }
}