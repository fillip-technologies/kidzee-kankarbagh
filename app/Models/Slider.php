<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider_img';

    protected $fillable = [
        'slider_img','title','description'
    ];

    public $timestamps = false; // since the table has no `created_at` or `updated_at`
}