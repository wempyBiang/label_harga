<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string("kode");
            $table->string("nama");
            $table->string("satuan");
            $table->integer("qty1");
            $table->integer("qty2");
            $table->integer("qty3");
            $table->integer("qty4");
            $table->integer("qty5");
            $table->integer("qty6");
            $table->integer("hrg1");
            $table->integer("hrg2");
            $table->integer("hrg3");
            $table->integer("hrg4");
            $table->integer("hrg5");
            $table->integer("hrg6");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
