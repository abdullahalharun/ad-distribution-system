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
        'ad_price'
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
        return $this->attributes['newspapers[]'] = json_decode($value);
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('ad_name', 'like', $term)
                ->orWhere('ad_type', 'like', $term);
        });
    }
}
