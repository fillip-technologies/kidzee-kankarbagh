<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'year',
        'month',
        'pdf_path',
    ];

    // Accessor to get full title like "Literati - Jan 2025"
    public function getTitleAttribute()
    {
        return "{$this->type} - {$this->month} {$this->year}";
    }
}
