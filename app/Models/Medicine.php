<?php

namespace App\Models;

use App\Models\SubClassification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;

    //One To One
    public function sub_classification()
    {
        return $this->belongsTo(SubClassification::class)->with('clasification');
    }

}
