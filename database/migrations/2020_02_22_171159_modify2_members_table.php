<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Modify2MembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('id_merk');
            $table->dropColumn('id_seri');
            $table->dropColumn('pekerjaan');
            $table->dropColumn('perkawinan');
            $table->dropColumn('jenis_kelamin');
            $table->string('id_kec');
            $table->string('id_kel');
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
