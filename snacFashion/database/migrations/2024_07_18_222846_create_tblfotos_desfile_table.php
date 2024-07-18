<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblfotosDesfileTable extends Migration
{
    public function up()
    {
        Schema::create('tblfotos_desfile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_desfile');
            $table->string('foto_desfile');
            $table->foreign('id_desfile')->references('id')->on('tbldesfile')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblfotos_desfile');
    }
}
