<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\Comentario;
use Auth;

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

    function create() {
        return view('artigos.create');
    }

    function store(Request $request) {
        $artigo = new Artigo;
        // $artigo->titulo = $request->titulo;
        // $artigo->corpo = $request->corpo;
        $artigo->fill($request->all());
        $artigo->user()->associate(Auth::user());
        // $artigo->user_id = Auth::user()->id;
        $artigo->save();

        // Artigo::create($request->all());

        return redirect('/artigos');
    }

    function storeComentario(Request $request, Artigo $artigo) {
        $comentario = new Comentario;
        $comentario->fill($request->all());
        $comentario->user()->associate(Auth::user());
        $comentario->artigo()->associate($artigo);
        $comentario->save();

        return redirect(url("/artigos/$artigo->id"));
    }

}
