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

        $groups = Group::get();

        return view('frontend.guiaatc', compact('groups'));
    }

    public function group(Group $group){

        return view('frontend.group', compact('group'));
    }

    public function semaforo(){
        return 'semaforo';
    }



}
