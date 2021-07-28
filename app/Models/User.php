<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Log;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'slug',
        'firstname',
        'lastname',
        'name',
        'email',
        'isCompanyContact',
        'image',
        'password',
        'address',
        'zip',
        'city',
        'country',
        'channels',
        'stripe_id',
        'notify'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAttribute($value)
    {
        if ($value == null) {
            return 'https://wb-profileimages.s3.eu-central-1.amazonaws.com/default.png';
        }
        return 'https://wb-profileimages.s3.eu-central-1.amazonaws.com/' . $value;
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function company()
    {
        return $this->hasOne('App\Company');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function isCompany()
    {
        return $this->isCompanyContact ? true : false;
    }

    public function hasCategoriesSet()
    {
        return $this->campaignCategories->isNotEmpty();
    }

    public function chatrooms()
    {
        return $this->belongsToMany(Chatroom::class, 'chatroom_users')->withTimestamps()->withPivot('role');
    }

    public function campaigns()
    {
        return $this->belongsToMany('App\Campaign')
            ->withTimestamps()
            ->withPivot('state_id', 'submission', 'approved', 'updated_at')
            ->orderBy('pivot_updated_at', 'desc');
    }

    public function receivesBroadcastNotificationsOn()
    {
        return 'App.User.' . $this->id;
    }

    public function taxPercentage()
    {
        return 16;
    }

    public function subjects()
    {
        return $this->hasMany(SubjectChapter::class);
    }

    public function campaignCategories()
    {
        return $this->belongsToMany('App\CampaignCategory')
            ->withTimestamps();
    }

    public function hasChannels()
    {
        if ($this->channels == null || $this->channels == "{}" || $this->channels == "null")
        {
            return false;
        }

        $channels = json_decode($this->channels);

        if (isset($channels->instagram) || isset($channels->youtube) || isset($channels->twitch)) {
            return true;
        } else {
            false;
        }
    }
}
