<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $table = 'master';

	protected $fillable = ['master_name'];

    public function scopeGetMasterName($query)
    {
        $query->select('master_name');
    }
}
