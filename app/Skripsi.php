<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    //
    protected $table='skripsi';
    protected $fillable=['judul','nama','nim','program','pembimbing1','nidn1','pembimbing2','nidn2','abstrak_text','abstrak_file','full','tgl_terbit'];
}
