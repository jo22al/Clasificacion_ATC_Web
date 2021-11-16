<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'profession',
        'personal_profile',
        'laboral_experience',
        'academic_history',
        'address',
        'email',
        'telephone',
        'facebook',
        'instagram',
        'awards_granted',
    ];

    public function getGetPhotoAttribute(){
        if($this->photo){
            return url('storage/' . $this->photo);
        } else{
            return null;
        }
    }

}
