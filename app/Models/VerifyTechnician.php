<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyTechnician extends Model
{
    use HasFactory;

    protected $table = 'verify_technicians';
    protected $fillable = ['Technician_ID','About_Field','Certificate'];
}
