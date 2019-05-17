<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmesController extends Controller {
    
    public function exibirTodos() {
        // $filmes = Filme::all();
        // $filmes = Filme::orderBy('title', 'DESC')->get();
        $filmes = Filme::where('title','like', 'A%')->get();
        return view('filmes-todos')
            ->with('filmes', $filmes);
    }
    
}
