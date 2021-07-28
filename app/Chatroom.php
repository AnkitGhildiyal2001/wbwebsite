<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{

    protected $fillable = [
        'name', 'type',
    ];

    protected $appends = ['unread_messages'];

    public function members()
    {
        return $this->belongsToMany(User::class, 'chatroom_users')->withTimestamps()->withPivot('role');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function isMember($userId)
    {
        return in_array($userId, $this->members->pluck('id')->toArray());
    }

    public function unreadMsgs()
    {
      
    }

    public function getUnreadMessagesAttribute() 
    {
      return $this->messages()->whereNull('read')->count();
    }
}