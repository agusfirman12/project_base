<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracerAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracer_answers', function (Blueprint $table) {
            $table->id();
            $table->char('id_user',10)->nullable();
            $table->char('nisn',20)->nullable();
            $table->string('akademi')->nullable();
            $table->string('kategori')->nullable();
            $table->string('tema')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('jenis_perusahaan')->nullable();
            $table->string('kota')->nullable();
            $table->string('nomer')->nullable();
            $table->string('lesensi')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('bidang')->nullable();
            $table->string('sesuai')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('hubungan')->nullable();
            $table->string('gaji_utama')->nullable();
            $table->string('lembur')->nullable();
            $table->string('gaji_lain')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('tracer_answers');
    }
}
