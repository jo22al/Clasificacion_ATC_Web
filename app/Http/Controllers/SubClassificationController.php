<?php

namespace App\Http\Controllers;

use App\Models\SubClassification;
use App\Models\Classification;
// use Illuminate\Http\Request;
use App\Http\Requests\SubClassificationRequest;

class SubClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subclassifications = SubClassification::latest()->paginate(15);

        return view('admin.subclassification.index', compact('subclassifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classifications = Classification::get();

        return view('admin.subclassification.create', compact('classifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubClassificationRequest $request)
    {
        SubClassification::Create( $request->all() );

        return back()->with('status', 'Sub Clasificacion Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubClassification  $subClassification
     * @return \Illuminate\Http\Response
     */
    public function show(SubClassification $subclassification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubClassification  $subClassification
     * @return \Illuminate\Http\Response
     */
    public function edit(SubClassification $subclassification)
    {
        $classifications = Classification::get();

        return view('admin.subclassification.edit', compact('subclassification', 'classifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubClassification  $subClassification
     * @return \Illuminate\Http\Response
     */
    public function update(SubClassificationRequest $request, SubClassification $subclassification)
    {
        $subclassification->update( $request->all() );

        return back()->with('status', 'Sub Clasificaicon Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubClassification  $subClassification
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubClassification $subclassification)
    {
        $subclassification->delete();

        return back()->with('status', 'Sub Clasificacion Eliminada');
    }
}
