<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblfotosDesfileTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('tblfotos_desfile')) {
            Schema::create('tblfotos_desfile', function (Blueprint $table) {
                $table->id();
                $table->foreignId('id_desfile')->constrained('tbldesfile');
                $table->string('foto_desfile');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('tblfotos_desfile');
    }
}
