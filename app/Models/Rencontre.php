<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rencontre extends Model
{
    public function album()
    {
        return $this->belongsTo('App\Models\Album');
    }
    public function equipe()
    {
        return $this->belongsTo('App\Models\Equipe');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withPivot('confirmation');
    }
}
