<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = 'genres';
    protected $primaryKey = 'id';

    
    
}


//relações
//1:1 - hasOne
//1:N - hasMany
//N:N - belongsToMany