<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $table = 'voting';
    protected $fillable = ['id','kandidat_id','user_id','name_id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
