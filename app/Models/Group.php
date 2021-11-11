<?php

namespace App\Models;

use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter',
        'name',
        'description'
    ];


    //One To Many
    public function classifications(){
        return $this->hasMany(Classification::class)->with('subClassification');
    } 
}
