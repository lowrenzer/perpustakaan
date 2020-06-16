<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = [
        'id',
        'id_pegawai',
        'nama',
        'jensi_kelamin',
        'no_hp',
        'alamat'
    ];
}
