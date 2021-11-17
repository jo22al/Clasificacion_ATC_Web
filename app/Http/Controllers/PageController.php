<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class PageController extends Controller
{
    public function inicio(){

        $groups = Group::get();

        return view('frontend.inicio', compact('groups'));
    }

    public function guiaatc(){
        return 'guiaatc';
    }

    public function semaforo(){
        return 'semaforo';
    }

    public function categories(){
        return 'categorias';
    }

    public function subcategories(){
        return 'sub categorias';
    }


}
