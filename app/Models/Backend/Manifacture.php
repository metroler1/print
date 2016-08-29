<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Manifacture extends Model
{
	protected $table = 'manifacture';
    protected $fillable=['manifacture'];

    public function scopeGetManifacture($query)
    {
        $query->select('manifacture');
    }
}
