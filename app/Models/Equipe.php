<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function rencontres()
    {
        return $this->hasMany('App\Models\Rencontre');
    }
}
