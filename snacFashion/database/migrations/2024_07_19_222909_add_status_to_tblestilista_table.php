<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblestilistas', function (Blueprint $table) {
            $table->boolean('status')->default(0); // 0 para inativo, 1 para ativo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblestilistas', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
