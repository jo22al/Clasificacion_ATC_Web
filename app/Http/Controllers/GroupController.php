<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::paginate(15);

        return view('admin.group.index', compact('groups'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'letter' => 'required|max:1|unique:groups',
            'name' => 'required',
            'description' => 'sometimes'
        ]);

        $data = $request->only('letter', 'name');
        $description = $request->input('description');
        $data['letter'] =strtoupper($data['letter']);

        if($description)
            $data['description'] = $description;

        Group::create($data);

        return redirect()->route('group.index')->with('success','Grupo creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('admin.group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {

        $request->validate([
            'letter' => 'required|max:1|unique:groups,letter,' . $group->id,
            'name' => 'required',
            'description' => 'sometimes'
        ]);

        $data = $request->only('letter', 'name');
        $description = $request->input('description');
        $data['letter'] =strtoupper($data['letter']);

        if($description)
            $data['description'] = $description;

        $group->update($data);

        return redirect()->route('group.index')->with('success','Grupo actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return back()->with('success', 'Grupo eliminado correctamente');
    }
}
