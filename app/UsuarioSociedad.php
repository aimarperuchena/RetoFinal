<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioSociedad extends Model
{
    protected $table="sociedad_user";
    protected $fillable=["id","sociedad_id","user_id"];
}
