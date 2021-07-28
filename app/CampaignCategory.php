<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignCategory extends Model
{
    public function campaigns()
    {
        return $this->hasMany('App\Campaign');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
            ->withTimestamps();
    }
}
