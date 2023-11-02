<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function show(Request $req){
        return view("final", ['data'=>$req]);
    }
}
