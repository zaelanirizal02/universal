<?php

namespace Laravel\Imports;
use Session;

use Laravel\Santri;
use Maatwebsite\Excel\Concerns\ToModel;

class SantriImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Santri([
            //
            'nis_santri' => $row[1],
            'nama_santri' => $row[2],
            'panggilan_santri' => $row[3],
            'jk_santri' => $row[4],
            'ttl_santri' => $row[5],
            'tempatlahir_santri'=> $row[6],
            'alamat_santri' => $row[7],
            'kecamatan_santri' => $row[8],
            'kota_santri' => $row[9],
            'telepon_santri' => $row[10],
            'hp_santri' => $row[11],
            'email_santri' => $row[12],

      //Data Ortu
            'namaayah_santri' => $row[13],
            'pekerjaanayah_santri' => $row[14],
            'namaibu_santri' => $row[15],
            'pekerjaanibu_santri' => $row[16],
            'alamatortu_santri' => $row[17],
            'teleponortu_santri' => $row[18],
            'hportu_santri' => $row[19],

      //Pendidikan Santri
            'pendidikan_santri' => $row[20],
            'fakultas_santri' => $row[21],
            'jurusan_santri' => $row[22],
            'angkatan_santri' => $row[23],
            'asalsekolah_santri' => $row[24],
            'tahunlulus_santri' => $row[25],
            'asalpesantren_santri' => $row[26],

      //Data Lain
            'hobby_santri' => $row[27],
            'anakke_santri' => $row[28],
            'bersaudara_santri' => $row[29],
            'golongandarah_santri' => $row[30],
            'penyakit_santri' => $row[31],

            'gambar_santri' => $row[32]
        ]);
    }
}
