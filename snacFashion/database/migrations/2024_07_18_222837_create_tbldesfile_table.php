<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbldesfileTable extends Migration
{
    public function up()
    {
        Schema::create('tbldesfile', function (Blueprint $table) {
            $table->id();
            $table->string('banner_desfile');
            $table->string('titulo_desfile');
            $table->string('subtitulo_desfile');
            $table->text('sobre_desfile');
            $table->date('data_desfile');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbldesfile');
    }
}
