<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model {
    protected $fillable = ['titulo', 'corpo'];

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
