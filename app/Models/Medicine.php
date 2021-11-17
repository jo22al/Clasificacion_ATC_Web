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
        'additional',
    ];

    public function classification(){
        return $this->belongsTo(Classification::class);
    }

    //One To One
    public function sub_classification()
    {
        return $this->belongsTo(SubClassification::class)->with('classification');
    }

}
