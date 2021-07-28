<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'user_id',
        'profile_id',
    ];

    public function campaigns() {
        return $this->hasMany('App\Campaign');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }
}
