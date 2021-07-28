<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
