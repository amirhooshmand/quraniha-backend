<?php

namespace App\Http\Controllers;

use App\Surah;
use App\Verse;
use Illuminate\Http\Request;

class SurahController extends Controller
{
    function show(){
        return Surah::all()->jsonSerialize();
    }

    function find(Surah $surah){
        $obj = $surah->verses;
        return $surah->jsonSerialize();
    }

    function daily(){
        $verse = Verse::whereRaw('length(text) < 200')->inRandomOrder()->first();
        $obj = $verse->surah;

        return $verse;
    }
}
