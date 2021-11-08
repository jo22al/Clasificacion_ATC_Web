<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubClassification extends Model
{
    use HasFactory;

    public function classification(){
        return $this->belongsTo(Classification::class);
    }

    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
}
