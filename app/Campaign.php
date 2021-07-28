<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Campaign extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'coupon_code',
        'influencer_quantity',
        'approve_influencer',
        'shipping_by_company',
        'custom_packaging',
        'target_audience_id',
        'hashtags',

        'campaign_type',
        'campaign_description',
        'publication_period_from',
        'publication_period_to',
        'account_to_tag',
        'influencer_product',
        'youtube',
        'twitch',
        'instagram',
        'dummycode',
        'product_givaway_count',
        'participation_terms',

        'company_id',
        'campaign_category_id',
        'archived_at',
        'status',
        'campaign_url',
        'states',
        'age_range',
        'review_url'
    ];

    public function scopeApplicable($query)
    {
        $campaign_ids = [];
        $applicableCampaigns = DB::select('SELECT *
        FROM campaigns as c
        WHERE c.id NOT IN (
            SELECT cu.campaign_id
            FROM campaign_user as cu
            WHERE cu.state_id <> 7
            GROUP BY cu.campaign_id
            HAVING COUNT(cu.user_id) >= c.influencer_quantity
            )');
        foreach ($applicableCampaigns as $campaign) {
            $campaign_ids[] = $campaign->id;
        }
        return $query->whereIn('id', $campaign_ids);
    }
    public function scopeAge($query,$dob)
    {   //return $query;
        $from = new DateTime($dob);
        $to   = new DateTime('today');
        $age = $from->diff($to)->y;
        return $query->where('age_range->first', '<=' ,$age)->where('age_range->second', '>=' ,$age);
    
    }
    public function scopeState($query,$state)
    {   //return $query;
        return $query->where('states', 'like', '%'.$state.'%');
    }
    public function scopeRole($query, $role_id)
    {
        return $query->where('target_audience_id', $role_id);
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function campaignCategory()
    {
        return $this->belongsTo('App\CampaignCategory');
    }

    public function images()
    {
        return $this->hasMany('App\CampaignImage');
    }

    public function targetAudience()
    {
        return $this->belongsTo('App\Role', 'target_audience_id');
    }

    public function active()
    {
        return $this->whereNull('archived_at');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
            ->withTimestamps()
            ->withPivot('state_id', 'submission', 'approved', 'updated_at')
            ->orderBy('pivot_updated_at', 'desc');
    }

    public function influencerCount()
    {
        return $this->users()->count();
    }

    public function influencerLimitReached()
    {
        $influencerLimitReached = ($this->influencer_quantity) > ($this->users()->where('state_id', '<>', 7)->count()) ? false : true;
        return $influencerLimitReached;
    }
}
