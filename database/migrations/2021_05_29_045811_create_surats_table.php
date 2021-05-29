<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->bigIncrements('id_surat');
            $table->string('nomor_surat',40);
            $table->string('judul_surat',150);
            $table->bigInteger('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id_kategori')
            ->on('kategori_surats')->onDelete('cascade');

            $table->bigInteger('id_supplier')->unsigned();
            $table->foreign('id_supplier')->references('id_supplier')
            ->on('pengirims')->onDelete('cascade');
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
        Schema::dropIfExists('surats');
    }
}
