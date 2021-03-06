<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = 'genres';
    protected $primaryKey = 'id';

    public function relationGerenoFilmes() {
        return $this->hasMany(Filme::class, 'genre_id', 'id');       
    }
    
}


//relações
//1:1 - hasOne
//1:N - hasMany
//N:N - belongsToMany