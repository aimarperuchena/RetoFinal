<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ["id", "descripcion"];

    public function user()
    {
        $this->hasMany('App\User');
    }
}
