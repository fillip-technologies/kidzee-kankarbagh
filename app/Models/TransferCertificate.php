<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransferCertificate extends Model
{
    protected $fillable = ['admission_no','tc_no','tc_file'];
    protected $primaryKey = 'id';
}
