<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*     public function index()
    {
        
        $count = Medicine::count();
        $medicines = Medicine::with('sub_classification')->get();
    
        return response()->json([
            'total' => $count,
            'medicines' => $medicines,
        ]);

    } */

    public function index(Request $request)
    {

        $group = $request->get('group');

        $query = Medicine::join('sub_classifications', 'sub_classifications.id', '=', 'medicines.sub_classification_id')
            ->join('classifications', 'classifications.id', '=', 'sub_classifications.classification_id')
            ->join('groups', 'groups.id', '=', 'classifications.group_id')
            ->select(
                'groups.letter as letterGroup',
                'groups.name as nameGroup',
                'groups.description as descriptionGroup',
                'classifications.code as codeClassification',
                'classifications.name as nameClassification',
                'classifications.additional as additionalClassification',
                'sub_classifications.code as codeSubClassification',
                'sub_classifications.name as nameSubClassification',
                'sub_classifications.additional as additionalSubClassification',
                'medicines.active_principle as activePrincipleMed',
                'medicines.pharmaceutical_form as pharmaceuticalFormMed',
                'medicines.indications as indicationsMed',
                'medicines.route_dosage as routeDosageMed',
                'medicines.management_rules as managementRulesMed',
                'medicines.observations as observationsMed',
                'medicines.additional as additionalMed'
            );

        if ($request->has('group')) {
            $query = $query->where('groups.letter', '=', $group);
        }

        $medicines = $query->get();

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
