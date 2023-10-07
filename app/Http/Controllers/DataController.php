<?php

namespace App\Http\Controllers;

use App\Models\Family;
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
}
