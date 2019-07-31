<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //attributes
    protected $table = 'usuario';
    protected $fillable =['nome','email','data_nascimento','nivel_id'];
    
    //relationship
    public function nivel(){
        return $this->belongsTo('App\Nivel');
    }
}
