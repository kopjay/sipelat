<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TatausahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tatausaha', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_dokumen');
            $table->string('nama');
            $table->string('file');
            $table->bigInteger('no_revisi')->nullable();
            $table->date('tgl_revisi')->nullable();
            $table->bigInteger('status')->nullable();
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
        //
    }
}
