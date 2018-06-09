<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  public function commentaires()
  {
      return $this->hasMany('App\Models\Commentaire');
  }
}
