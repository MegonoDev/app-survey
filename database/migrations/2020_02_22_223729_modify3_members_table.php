<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Modify3MembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('members', function (Blueprint $table) {

        $table->string('id_kab')->change();
        $table->string('id_prov')->change();
        $table->string('id_kec')->after('id_kab')->change();
        $table->string('id_kel')->after('id_kec')->change();
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
