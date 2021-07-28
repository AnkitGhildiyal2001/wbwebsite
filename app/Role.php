<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function campaigns()
    {
        return $this->hasMany('App\Campaign', 'target_audience_id');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
