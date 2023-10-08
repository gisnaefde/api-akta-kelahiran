<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\People;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function family (){
        $family = Family::with("people")->get();
        return response()->json([
            "status"=> "success",
            "data"=> $family,
        ],200);
    }

    public function individu(){
        $individu = People::get();
        return response()->json([
            "status"=> "success",
            "data"=> $individu,
        ],200);
    }
}
