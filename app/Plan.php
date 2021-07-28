<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected $fillable = ['name', 'price', 'stripe_plan_id'];
}
