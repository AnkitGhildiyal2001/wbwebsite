<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignImage extends Model
{
    protected $fillable = [
        'url',
        'campaign_id',
    ];

    public function getUrlAttribute($value)
    {
        return 'https://wb-campaigns.s3.eu-central-1.amazonaws.com/' . $value;
    }

    public function campaign()
    {
        return $this->belongsTo('App\Campaign');
    }
}
