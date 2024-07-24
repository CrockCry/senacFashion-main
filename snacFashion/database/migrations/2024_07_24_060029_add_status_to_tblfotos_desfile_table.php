<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToTblfotosDesfileTable extends Migration
{
    public function up()
    {
        Schema::table('tblfotos_desfile', function (Blueprint $table) {
            $table->boolean('status')->default(true); // Adiciona a coluna status com valor default true
        });
    }

    public function down()
    {
        Schema::table('tblfotos_desfile', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
