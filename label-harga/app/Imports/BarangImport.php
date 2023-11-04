<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BarangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'kode' => $row['kode'],
            'nama' => $row['nama'],
            'satuan' => $row['satuan'],
            'qty1' => $row['ada_hqty'],
            'qty2' => $row['sd_qty1'],
            'qty3' => $row['sd_qty2'],
            'qty4' => $row['sd_qty3'],
            'qty5' => $row['sd_qty4'],
            'qty6' => $row['sd_qty5'],
            'hrg1' => $row['hrg_qty1'],
            'hrg2' => $row['hrg_qty2'],
            'hrg3' => $row['hrg_qty3'],
            'hrg4' => $row['hrg_qty4'],
            'hrg5' => $row['hrg_qty5'],
            'hrg6' => $row['hrg_qty6'],
            
        ]);
    }
}
