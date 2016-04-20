<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{

	protected $table = 'check';

	protected $fillable = ['catridge_name', 'price', 'type_of_repair', 'master', 'influence'];

    public function scopeBillLists($query)
    {
        $query->where('master', 'Максим')
            ->groupBy('influence')
            ->having('influence', '>', '0');
    }

}
