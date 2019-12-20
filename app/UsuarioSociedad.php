<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioSociedad extends Model
{
    protected $table="sociedad_user";
    protected $fillable=["sociedad_id","usuario_id"];
}
