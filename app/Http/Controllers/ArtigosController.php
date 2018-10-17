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
        
    function show(Artigo $artigo) {
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

        // return redirect('/artigos');
        return redirect(route('artigos.index'));
    }

    function edit(Artigo $artigo) {
        return view('artigos.edit', compact('artigo'));
    }

    function update(Request $request, Artigo $artigo) {
        if ($artigo->user == Auth::user()) {
            $artigo->fill($request->all());
            $artigo->save();

            return redirect(route('artigos.show', $artigo->id));
        } else
            abort(403);
    }

    function destroy(Request $request, Artigo $artigo) {
        if ($artigo->user == Auth::user()) {
            $artigo->delete();

            return redirect(route('artigos.index'));
        } else
            abort(403);
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
