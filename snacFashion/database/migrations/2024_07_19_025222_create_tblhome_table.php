<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblhomeTable extends Migration
{
    public function up()
    {
        Schema::create('tblhome', function (Blueprint $table) {
            $table->id();
            $table->string('banner_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblhome');
    }
}
