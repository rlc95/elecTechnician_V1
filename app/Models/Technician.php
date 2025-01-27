<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;

    protected $table = 'technicians';
    protected $fillable = ['id','FirstName','LastName','Email','UserName','Address','Password','ContactNumber','LocationCode','Image','Town','Device_A','Device_B','Device_C'];
}
