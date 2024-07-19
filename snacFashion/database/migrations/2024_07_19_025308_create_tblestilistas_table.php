<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblestilistasTable extends Migration
{
    public function up()
    {
        Schema::create('tblestilistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('imagem_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblestilistas');
    }
}
