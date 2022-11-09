<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'camp_id',
        'name',
    ];

    function camp()
    {
        return $this->hasMany('App\Models\Camp', 'camp_id');
    }
}
