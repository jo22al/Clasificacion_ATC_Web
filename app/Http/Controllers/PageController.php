<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('frontend.inicio');
    }

    public function guiaatc(){
        return 'guiaatc';
    }

    public function semaforo(){
        return 'semaforo';
    }

    public function groups(){
        return 'grupos';
    }

    public function categories(){
        return 'categorias';
    }

    public function subcategories(){
        return 'sub categorias';
    }

    public function medicine(){
        return 'medicamento';
    }


}
