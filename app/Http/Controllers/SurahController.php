<?php

namespace App\Http\Controllers;

use App\Surah;
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
}
