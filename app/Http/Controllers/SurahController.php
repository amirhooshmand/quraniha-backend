<?php

namespace App\Http\Controllers;

use App\Surah;
use App\Verse;
use App\VerseOfTheDay;
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
        $verse = VerseOfTheDay::all()->last();
        $obj = $verse->verse;
        return $verse;
    }
}
