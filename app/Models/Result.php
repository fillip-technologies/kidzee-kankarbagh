<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['class','section','exam_type','result_file','exam_date'];
    protected $primaryKey = 'id';
}
