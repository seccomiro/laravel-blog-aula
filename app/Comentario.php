<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {
    
    public function artigo() {
        return $this->belongsTo(Artigo::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
