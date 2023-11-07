<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Illuminate\Http\Request;

class LebelDatabase extends Controller
{
    function show(Request $req){
        $barangs = [];
        $filePath = "../data_temp";
        $extension = $req->file('fileBarcode')->extension(); 
        $moveFile = $req->file('fileBarcode')->move($filePath, "temp.$extension");
        $realPath = $moveFile->getLinkTarget();

        $reader = ReaderEntityFactory::createXLSXReader();
        $reader->open($realPath);

        foreach ($reader->getSheetIterator() as $sheet) {
            foreach ($sheet->getRowIterator() as $row) {
                foreach ($row->getCells() as $cell) {
                    // print($cell->getValue()."<br>");
                    $barang = Barang::where("kode", $cell->getValue())->first();
                    array_push($barangs, $barang);
                }
            }
        }
        $reader->close();

        return view("lebelDatabaseHasil", ["barangs"=>$barangs]);

    }
}
