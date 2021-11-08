<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    public function classification(){
        return $this->belongsTo(Classification::class);
    }

    public function subclassification(){
        return $this->belongsTo(SubClassification::class);
    }
}
