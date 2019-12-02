<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Santri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('santris', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nis_santri');
          $table->string('nama_santri');
          $table->string('panggilan_santri');
          $table->string('jk_santri');
          $table->date('ttl_santri');
          $table->string('tempatlahir_santri');
          $table->text('alamat_santri');
          $table->string('kecamatan_santri');
          $table->string('kota_santri');
          $table->string('telepon_santri');
          $table->string('hp_santri');
          $table->string('email_santri');

        //Data Ortu
          $table->string('namaayah_santri');
          $table->string('pekerjaanayah_santri');
          $table->string('namaibu_santri');
          $table->string('pekerjaanibu_santri');
          $table->text('alamatortu_santri');
          $table->string('teleponortu_santri');
          $table->string('hportu_santri');

        //Pendidikan Santri
          $table->string('pendidikan_santri');
          $table->string('fakultas_santri');
          $table->string('jurusan_santri');
          $table->string('angkatan_santri');
          $table->string('asalsekolah_santri');
          $table->string('tahunlulus_santri');
          $table->string('asalpesantren_santri');

        //Data Lain
          $table->string('hobby_santri');
          $table->string('anakke_santri');
          $table->string('bersaudara_santri');
          $table->string('golongandarah_santri');
          $table->string('penyakit_santri');

        //Data File/gambar
          $table->string('gambar_santri');

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
        //
    }
}
