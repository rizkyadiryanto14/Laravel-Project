<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenSiswa extends Model
{
    protected $fillable = ['siswa_id', 'tanggal', 'kehadiran_id'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa')->withDefault();
    }

    public function kehadiransiswa()
    {
        return $this->belongsTo('App\Kehadiran');
    }

    protected $table = 'absensi_siswa';
}
