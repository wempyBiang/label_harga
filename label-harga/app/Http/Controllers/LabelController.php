<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LabelController extends Controller
{
    public function show(Request $req){
        return view("lebelHargaHasil", ['data'=>$req]);
    }

}
