<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;

class ArtigosController extends Controller {
    
    function index() {
        $artigos = Artigo::all();
        $teste = '123';
        return view('artigos.index', compact('artigos', 'teste'));
    }
        
    function show($id) {
        $artigo = Artigo::find($id);
        return view('artigos.show', compact('artigo'));
    }

}
