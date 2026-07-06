<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achiever extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'type',
        'class',
        'session',
        'description',
        'event_details',
        'rank',
    ];
}

