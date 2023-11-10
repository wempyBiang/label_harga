<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TestDatabase extends Controller
{
    public function show(Request $req){
        $barangs = DB::table('stockdetail')->join('stock', 'stock.cSTKpk', '=', 'stockdetail.cSTDfkSTK')
        ->where('cSTDcode', $req->kode)->first();

        return view("lebelDatabaseHasil", ["barangs"=>[$barangs]]);

    }
}
