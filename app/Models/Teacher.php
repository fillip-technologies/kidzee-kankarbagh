<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'department', 'photo', 'bio','position'];
    protected $primaryKey = 'id';
}
