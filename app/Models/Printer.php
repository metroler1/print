<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
	protected $fillable=['current_id', 'manifacture_id', 'model', 'types_id', 'place', 'ip', 'catridge_has', 'master_id', 'auxiliary'];

    public function scopePrinterWithIp($query)
    {
        $query->where('ip', '<>', '');
    }

    public function master()
    {
        return $this->belongsTo('App\Models\Master');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'types_id');
    }

    public function manifacture()
    {
        return $this->belongsTo('App\Models\Backend\Manifacture');
    }


}