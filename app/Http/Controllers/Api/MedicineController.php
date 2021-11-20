<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function index(Request $request)
    {

        $group = $request->get('group');
        $query = Medicine::queryApi();

        if ($request->has('group')) {
            $query = $query->where('groups.letter', '=', $group);
        }

        $medicines = $query->get();

        return response()->json([
            'medicines' => $medicines,
        ]);
    }

    public function search($query)
    {

        $medicines = Medicine::queryApi()->where('medicines.active_principle', 'like', '%' . $query . '%')
                                         ->orwhere('medicines.indications', 'like', '%' . $query . '%')->get();;

        return response()->json([
            'medicines' => $medicines,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
