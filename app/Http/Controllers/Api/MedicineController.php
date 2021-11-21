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
        $query1 = Medicine::queryApi1();
        $query2 = Medicine::queryApi2();

        if ($request->has('group')) {
            $query1 = $query1->where('groups.letter', '=', $group);
        }

        if ($request->has('group')) {
            $query2 = $query2->where('groups.letter', '=', $group);
        }

        $medicines1 = $query1->get()->toArray();
        $medicines2 = $query2->get()->toArray();

        $medicines = array_merge($medicines1, $medicines2);


        return response()->json([
            'medicines' => $medicines,
        ]);
    }

    public function search($query)
    {

        $medicines1 = Medicine::queryApi1()->where('medicines.active_principle', 'like', '%' . $query . '%')
            ->orwhere('medicines.indications', 'like', '%' . $query . '%')->get()->toArray();

        $medicines2 = Medicine::queryApi2()->where('medicines.active_principle', 'like', '%' . $query . '%')
            ->orwhere('medicines.indications', 'like', '%' . $query . '%')->get()->toArray();


        $medicines = array_merge($medicines1, $medicines2);

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
