<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'ministry',
        'departmentOrDirectorate',
        'office',
        'administrativeDepartment',
        'district',
        'districtLevelOffice',
        'upazila',
        'upazilaLevelOffice',
    ];
}
