<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Resume;


class PageController extends Controller
{
    public function inicio(){

        $groups = Group::get();
        $resumes = Resume::get();

        return view('frontend.inicio', compact('groups', 'resumes'));
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


    public function resume(Resume $resume){

        return view('frontend.resume', compact('resume'));
    }

}
