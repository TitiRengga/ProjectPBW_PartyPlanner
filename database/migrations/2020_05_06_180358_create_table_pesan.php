<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pesan', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->text('Alamat');
            $table->string('Email');
            $table->date('Tanggal_Booking');
            $table->string('Toko');
            $table->string('Tipe_Pesta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pesan');
    }
}