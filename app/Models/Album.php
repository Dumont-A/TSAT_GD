<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
        //return $this->hasMany('photos','album_id');
    }
    public function rencontre()
    {
        return $this->belongsTo('App\Models\Rencontre');
    }
    public function tournoi()
    {
        return $this->belongsTo('App\Models\Tournoi');
    }
}
