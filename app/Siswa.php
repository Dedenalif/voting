<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    public function siswa_calon_visi(){
        return $this->belongsTo('App\Kandidat','visi_misi');
    }
}
