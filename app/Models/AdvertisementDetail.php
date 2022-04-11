<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertisementName',
        'advertisementData',
        'institution_id',
        'advertisement_size_id',
        'newspaper_id',
    ];
}
