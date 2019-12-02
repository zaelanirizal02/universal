<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nama_profile','isi_profile','gambar_profile'
  ];
  // public $timestamps = false;
  
}
