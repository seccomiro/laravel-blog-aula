<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigosController extends Controller {
    
    function index() {
        return view('artigos');
    }
        
    function laravel() {
        return view('artigos_laravel');
    }

}
