<?php

namespace App\Models;

use App\Models\Medicine;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class  SubClassification extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function classification(){
        return $this->belongsTo(Classification::class);
    }

    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
=======
    
    //One To One
    public function clasification()
    {
        return $this->belongsTo(Classification::class, 'id')->with('group');
    }


    //One To Many
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }


>>>>>>> e86397685647277ab26805a54c45da867ce304b9
}
