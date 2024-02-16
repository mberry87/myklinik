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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->string('no_ktp')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->string('alamat')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('prov')->nullable();
            $table->string('kab')->nullable();
            $table->string('kec')->nullable();
            $table->string('kel')->nullable();
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
        Schema::dropIfExists('pasien');
    }
};
