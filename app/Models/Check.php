<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{

	protected $table = 'check';

	protected $fillable = ['catridge_name', 'price', 'manifacture', 'type_of_repair', 'master', 'influence'];

    public function scopeBillListsMaksim($query)
    {
        $query->where('master_id', '1')
            ->groupBy('influence')
            ->having('influence', '>', '0');
    }

    public function scopeBillListsVladimir($query)
    {
        $query->where('master_id', '2')
            ->groupBy('influence')
            ->having('influence', '>', '0');
    }

    public function scopeShowCheckId($query, $influence)
    {
        $query->where('influence', $influence);
    }

    public function manifacture()
    {
        return $this->belongsTo('App\Models\Backend\Manifacture');
    }

    public function office()
    {
        return $this->belongsTo('App\Models\Office');
    }

    public function master()
    {
        return $this->belongsTo('App\Models\Master');
    }

}
