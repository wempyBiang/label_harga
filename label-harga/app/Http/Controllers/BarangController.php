<?php

namespace App\Http\Controllers;

use App\Imports\BarangImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BarangController extends Controller
{
    function import(){
        Excel::import(new BarangImport, request()->file('file'));
        return back();
    }
}
