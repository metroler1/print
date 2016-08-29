<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $table = 'types';

	protected $fillable=['type'];

    public function scopeGetType($query)
    {
        $query->select('type');
    }

}
