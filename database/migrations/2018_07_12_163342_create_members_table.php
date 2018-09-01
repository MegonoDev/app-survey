<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('handphone');
            $table->string('kode')->unique();
            $table->string('status_verifikasi');
            $table->string('pekerjaan');
            $table->string('perkawinan');
            $table->text('kendaraan');
            $table->integer('id_kab');
            $table->integer('id_prov');
            $table->text('motorbaru');
            $table->text('motorbaru1');
            $table->string('operator_input');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
