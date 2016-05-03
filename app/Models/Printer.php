<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
	protected $fillable=['current_id', 'manifacture', 'model', 'type', 'place', 'ip', 'catridge_has', 'master', 'auxiliary'];

    public function scopePrinterWithIp($query)
    {
        $query->where('ip', '!=', 'NULL');
    }

}