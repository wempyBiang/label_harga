<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";

    protected $fillable = [
        'kode',
        'nama',
        'satuan',
        'qty1',
        'qty2',
        'qty3',
        'qty4',
        'qty5',
        'qty6',
        'hrg1',
        'hrg2',
        'hrg3',
        'hrg4',
        'hrg5',
        'hrg6',

    ];


}
