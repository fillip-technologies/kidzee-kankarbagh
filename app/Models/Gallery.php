<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     // Table name (optional if Laravel's naming convention matches)
    protected $table = 'galleries';

    // Mass assignable fields
    protected $fillable = [
        'gallery_type',
        'section_id',
        'description',
        'image_path',
        'alt_text',
        'description',
    ];

    protected $casts = [
        'image_path' => 'array', // Laravel will auto-cast JSON column to array
    ];
}
