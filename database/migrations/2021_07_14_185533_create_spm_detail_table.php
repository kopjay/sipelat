<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpmDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spm_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('spm_id');
            $table->string('nota_dinas');
            $table->text('nota_dinas_keterangan')->nullable();
            $table->text('spt_keterangan')->nullable();
            $table->integer('dokumen_tipe')->nullable();
            $table->text('dokumen_keterangan')->nullable();
            $table->text('spm_keterangan')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('spm_detail');
    }
}
