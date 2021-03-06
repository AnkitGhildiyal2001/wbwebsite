<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'about',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->hasOne('App\Company');
    }
}
