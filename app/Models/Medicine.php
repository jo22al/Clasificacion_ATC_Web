<?php

namespace App\Models;

use App\Models\SubClassification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_classification_id',
        'classification_id',
        'active_principle',
        'pharmaceutical_form',
        'indications',
        'route_dosage',
        'management_rules',
        'observations',
        'criterion',
        'additional',
    ];

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    //One To One
    public function sub_classification()
    {
        return $this->belongsTo(SubClassification::class)->with('classification');
    }


    static function queryApi()
    {
        return Medicine::join('sub_classifications', 'sub_classifications.id', '=', 'medicines.sub_classification_id')
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
                'medicines.id as idMedicine',
                'medicines.criterion as criterionMed',
                'medicines.active_principle as activePrincipleMed',
                'medicines.pharmaceutical_form as pharmaceuticalFormMed',
                'medicines.indications as indicationsMed',
                'medicines.route_dosage as routeDosageMed',
                'medicines.management_rules as managementRulesMed',
                'medicines.observations as observationsMed',
                'medicines.additional as additionalMed'
            );
    }
}
