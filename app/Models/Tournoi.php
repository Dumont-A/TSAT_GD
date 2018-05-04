<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model
{
  public function users()
  {
      return $this->belongsToMany('App\Models\User')->withPivot('confirmation');
  }
  public function album()
  {
      return $this->belongsTo('App\Models\Album');
  }
}
