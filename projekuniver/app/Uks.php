<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Uks extends Model
{
  protected $fillable = ['nama_uks', 'isi_uks','gambar_uks'
  ];

  // public $timestamps = false;
}
