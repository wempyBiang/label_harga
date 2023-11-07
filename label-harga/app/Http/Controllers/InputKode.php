<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class InputKode extends Controller
{
    public function show(Request $req){
        $barangArray = explode( "\r\n", $req->kodes);
        $barangs = [];
        for ($i=0; $i < count($barangArray); $i++) { 
            $barang = Barang::where("kode", $barangArray[$i])->first();
            array_push($barangs, $barang);
        }

        // dd($barangs);
        

        return view("lebelDatabaseHasil", ["barangs"=>$barangs]);
    }
}
