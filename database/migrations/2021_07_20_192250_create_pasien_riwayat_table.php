<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienRiwayatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_riwayat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pasien_id');
            $table->date('tanggal');
            $table->text('anamnesa');
            $table->text('diagnosa');
            $table->text('tindakan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien_riwayat');
    }
}
