<?php

namespace App\Models;

use App\Models\Medicine;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class  SubClassification extends Model
{
    use HasFactory;

    protected $fillable = [
        'classification_id',
        'code',
        'name',
        'additional',
    ];

    //One To One
    public function classification()
    {
        return $this->belongsTo(Classification::class)->with('group');
    }


    //One To Many
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }


}
