<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolEvent extends Model
{
    protected $table = 'school_event';

    protected $fillable = [
        'slider_img','title','description','published_on'
    ];

    public $timestamps = false; // since the table has no `created_at` or `updated_at`
}