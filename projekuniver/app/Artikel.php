<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
  protected $fillable = ['nama_artikel', 'jenis_artikel', 'gambar_artikel', 'isi_artikel'
  ];

  // public $timestamps = false;


}
