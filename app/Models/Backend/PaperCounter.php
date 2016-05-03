<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class PaperCounter extends Model
{
    protected $fillable = ['device_name', 'number_of', 'notice'];

    public function scopeGetDateSet($query)
    {
        
    }
}
