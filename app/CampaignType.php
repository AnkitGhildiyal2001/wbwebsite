<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignType extends Model
{
    public function campaigns()
    {
        return $this->hasMany('App\Campaign');
    }
}
