<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable= [
        'nama_mapel'
    ];
    public function materi()
    {
        return $this->hasMany('App\Materi');
    }
    public function guru()
    {
        return $this->hasMany('App\Guru');
    }
    public function siswa()
    {
        return $this->belongsToMany('App\Siswa');
    }
}
