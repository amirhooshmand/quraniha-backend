<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerseOfTheDay extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'verse_id'];

    public function verse(){
        return $this->belongsTo('App\Verse');
    }
}
