<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artigo;
use App\Comentario;
use Auth;

class ComentariosController extends Controller {

    function store(Request $request, Artigo $artigo) {
        $comentario = new Comentario;
        $comentario->fill($request->all());
        $comentario->user()->associate(Auth::user());
        $comentario->artigo()->associate($artigo);
        $comentario->save();

        return redirect(route('artigos.show', $artigo->id));
    }

    function update(Request $request, Artigo $artigo, Comentario $comentario) {
        // if ($comentario->user == Auth::user()) {
            $comentario->fill($request->all());
            $comentario->save();

            return response()->json([
                'sucesso' => true,
                'corpo' => $comentario->corpo
            ]);
        // } else
        //     abort(403);
    }

}
