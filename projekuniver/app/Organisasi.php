<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
  protected $fillable = ['jenis_organisasi', 'isi_organisasi','gambar_organisasi'
  ];

  // public $timestamps = false;
}
