<?php

namespace App\Models;

use App\Models\Group;
use App\Models\SubClassification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classification extends Model
{
    use HasFactory;


    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
    
    //One To One
    public function group()
    {
        return $this->belongsTo(Group::class, 'id');
    }


    //One To Many
    public function subClassification()
    {
        return $this->hasMany(SubClassification::class);
    }

}
