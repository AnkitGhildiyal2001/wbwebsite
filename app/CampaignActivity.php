<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignActivity extends Model
{
    protected $fillable = [
        'campaign_activity_id',
        'user_id',
        'campaign_id',
        'company_id',
        'company_user_id',
    ];
}
