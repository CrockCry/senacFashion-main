<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToTblhomeTable extends Migration
{
    public function up()
    {
        Schema::table('tblhome', function (Blueprint $table) {
            $table->boolean('status')->default(1); // 1 para ativo, 0 para inativo
        });
    }

    public function down()
    {
        Schema::table('tblhome', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
