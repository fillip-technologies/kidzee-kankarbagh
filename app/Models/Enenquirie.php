<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enenquirie extends Model
{
    protected $fillable = [
        'student_name',
        'mobile_number',
        'father_name',
        'mother_name',
        'class',
        'current_location',
        'message',
    ];

    protected $primaryKey = 'id';
}
