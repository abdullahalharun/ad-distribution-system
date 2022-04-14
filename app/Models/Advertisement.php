<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad_name',
        'ad_file',
        'institution_id',
        'ad_type',
        'newspaper_number',
        'ad_size_id',
        'newspapers',
    ];

    // public function newspaper_name()
    // {
    //     return $this->hasMany('App\Models\Newspaper', 'newspaperName', 'newspapers');
    // }

    /**
     * Set the newspaper
     *
     */
    public function setNewspapersAttribute($value)
    {
        $this->attributes['newspapers'] = json_encode($value);
    }

    /**
     * Get the newspaper
     *
     */
    public function getNewspapersAttribute($value)
    {
        return $this->attributes['newspapers'] = json_decode($value);
    }
}
