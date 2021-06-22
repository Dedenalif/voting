<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $table = 'kandidat';

    public function siswa_calon_ketua(){
        return $this->belongsTo('App\Siswa','calon_ketua','id');
    }
    public function siswa_calon_wakil(){
        return $this->belongsTo('App\Siswa','calon_wakil','id');
    }
}
