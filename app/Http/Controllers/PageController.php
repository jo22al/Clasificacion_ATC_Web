<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Resume, Group, Medicine};


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


    public function resume(Resume $resume){

        return view('frontend.resume', compact('resume'));
    }

    public function search(Request $search){

        $medicines = Medicine::where('active_principle', 'LIKE', "%$search->medicine%")->orwhere('indications', 'LIKE', "%$search->medicine%")->get();

        return view('frontend.search', compact('medicines'));
    }

}
