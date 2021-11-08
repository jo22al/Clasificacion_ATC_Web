<?php

namespace App\Models;

use App\Models\SubClassification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicine extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function classification(){
        return $this->belongsTo(Classification::class);
    }

    public function subclassification(){
        return $this->belongsTo(SubClassification::class);
    }
=======
    //One To One
    public function sub_classification()
    {
        return $this->belongsTo(SubClassification::class)->with('clasification');
    }

>>>>>>> e86397685647277ab26805a54c45da867ce304b9
}
