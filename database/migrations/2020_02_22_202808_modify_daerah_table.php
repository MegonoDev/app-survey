<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyDaerahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provinsis', function (Blueprint $table) {
            $table->string('id_prov')->change();
        });
        Schema::table('kabupatens', function (Blueprint $table) {
            $table->string('id_kab')->change();
            $table->string('id_prov')->change();
        });
        Schema::table('kecamatans', function (Blueprint $table) {
            $table->string('id_kec')->change();
            $table->string('id_kab')->change();
        });
        Schema::table('kelurahans', function (Blueprint $table) {
            $table->string('id_kel')->change();
            $table->string('id_kec')->change();
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
