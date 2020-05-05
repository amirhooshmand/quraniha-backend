<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function verses()
    {
        return $this->hasMany(Verse::class);
    }
}
