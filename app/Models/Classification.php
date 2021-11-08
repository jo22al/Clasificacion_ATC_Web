<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    public function group(){
        return $this->belongsTo(Group::Class);
    }

    public function subclassifications(){
        return $this->hasMany(SubClassification::class);
    }

    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
}
