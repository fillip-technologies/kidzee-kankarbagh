<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['name','email','phone','resume','cover'];
    protected $primaryKey = 'id';
}
