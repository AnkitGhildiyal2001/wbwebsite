<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileAccess extends Model
{
    protected $fillable = [
        'company_id',
        'user_id',
    ];
}
