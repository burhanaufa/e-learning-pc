<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable= [
        'isi_pertanyaan'
    ];
    public function jawaban()
    {
        return $this->hasMany('App\Jawaban');
    }
    public function materi()
    {
        return $this->belongsTo('App\Materi');
    }
}
