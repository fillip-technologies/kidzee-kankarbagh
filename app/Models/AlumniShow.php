<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumniShow extends Model
{
  

    // Table name (optional if Laravel's naming convention matches)
    protected $table = 'alumni_show';

    // Mass assignable fields
    protected $fillable = [
        'name',
        'designation',
        'quote',
        'photo',
        'status',
    ];
}
