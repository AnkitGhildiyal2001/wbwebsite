<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image_product',
        'variations',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function getVariationsAttribute($value)
    {
        return json_decode($value);
    }
}
