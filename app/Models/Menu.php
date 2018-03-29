<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    public $timestamps = false;
    
    public function sousmenus()
    {
        return $this->hasMany('App\Models\Contenu');
    }
}
