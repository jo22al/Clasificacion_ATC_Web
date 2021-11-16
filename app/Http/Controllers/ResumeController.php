<?php

namespace App\Http\Controllers;

use App\Models\Resume;
// use Illuminate\Http\Request;
use App\Http\Requests\ResumeRequest;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::latest()->get();

        return view('admin.resume.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeRequest $request)
    {
        $resume = Resume::Create( $request->all() );

        if($request->file('photo')){
            $resume->photo = $request->file('photo')->store('resume', 'public');
            $resume->save();
        }

        return back()->with('status', 'Curriculum Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        return view('admin.resume.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeRequest $request, Resume $resume)
    {
        $photo_actual = $resume->photo;

        $resume->update( $request->all() );

        if($request->file('photo')){

            Storage::disk('public')->delete( $photo_actual );

            $resume->photo = $request->file('photo')->store('resume', 'public');
            $resume->save();
        }

        return back()->with('status', 'Curriculum Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        Storage::disk('public')->delete( $resume->photo );

        $resume->delete();

        return back()->with('status', 'Curriculum Eliminado');
    }
}
