<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'office';
    protected $fillable = ['office_name', 'image_path'];

    public function scopeGetOfficeName($query)
    {
        $query->select('office_name');
    }

}

