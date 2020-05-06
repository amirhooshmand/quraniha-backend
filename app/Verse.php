<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'surah_id'];

    public function surah()
    {
        return $this->belongsTo('App\Surah');
    }
}
