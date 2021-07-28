<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectChapter extends Model
{
    protected  $fillable = ['cTitle','cSubject','cVideoUrl'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Quizes()
    {
        return $this->hasMany(Quiz::class);
    }
}
