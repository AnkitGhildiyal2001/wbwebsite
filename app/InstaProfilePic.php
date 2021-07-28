<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstaProfilePic extends Model
{
    protected $fillable = [
        'user_id',
        'profile_pic_url',
        'expire_time'
    ];
}
