<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model {
    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
