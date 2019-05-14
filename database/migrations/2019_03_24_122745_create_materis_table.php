<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_materi');
            $table->unsignedBigInteger('mapels_id')->nullable();
            $table->mediumText('konten_materi');
            $table->timestamps();
            $table->foreign('mapels_id')->references('id')->on('mapels');
        });
        //Schema::table('materis', function (Blueprint $table) {
            //$table->unsignedBigInteger('mapel_id');

            //$table->foreign('mapel_id')->references('id')->on('mapels');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materis');
    }
}
