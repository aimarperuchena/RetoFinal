<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioSociedad extends Model
{
    use SoftDeletes;
    protected $table="sociedad_user";
    protected $fillable=["id","sociedad_id","user_id"];

    public function usuario(){
        return $this->hasOne(User::class, 'id');
    }

    public function sociedades(){
        return $this->belongsTo(Sociedad::class);
    }
}
