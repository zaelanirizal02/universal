<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
  protected $fillable = [

        'nis_santri' ,
        'nama_santri' ,
        'panggilan_santri' ,
        'jk_santri' ,
        'ttl_santri' ,
        'tempatlahir_santri',
        'alamat_santri' ,
        'kecamatan_santri',
        'kota_santri',
        'telepon_santri' ,
        'hp_santri' ,
        'email_santri' ,

  //Data Ortu
        'namaayah_santri' ,
        'pekerjaanayah_santri' ,
        'namaibu_santri' ,
        'pekerjaanibu_santri' ,
        'alamatortu_santri' ,
        'teleponortu_santri' ,
        'hportu_santri' ,

  //Pendidikan Santri
        'pendidikan_santri' ,
        'fakultas_santri' ,
        'jurusan_santri' ,
        'angkatan_santri' ,
        'asalsekolah_santri' ,
        'tahunlulus_santri' ,
        'asalpesantren_santri' ,

  //Data Lain
        'hobby_santri' ,
        'anakke_santri' ,
        'bersaudara_santri' ,
        'golongandarah_santri' ,
        'penyakit_santri',

        'gambar_santri'

  ];

  // public $timestamps = false;
}
