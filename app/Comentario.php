<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {
    
    public function artigo() {
        return $this->belongsTo(Artigo::class);
    }

}
