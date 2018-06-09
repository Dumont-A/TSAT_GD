<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
  public function news()
  {
      return $this->belongsTo('App\Models\News');
  }
  public function users()
  {
      return $this->belongsTo('App\Models\User')->nullable();
  }
}
