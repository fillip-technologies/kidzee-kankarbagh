<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HNews extends Model
{
    protected $table = 'hnews';

    protected $fillable = [
        'notice','link','type'
    ];

    public $timestamps = false; // since the table has no `created_at` or `updated_at`
}