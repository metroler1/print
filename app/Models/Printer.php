<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
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

    public function getPrinterList()
    {
        return DB::select("SELECT p.id, p.current_id, p.place, p.person, p.ip, 
                                  p.auxiliary, manifacture.manifacture, master.master_name, types.type,
                                  prm.model
                            FROM printers as p
                            INNER JOIN manifacture ON p.manifacture_id = manifacture.id
                            INNER JOIN master ON p.master_id = master.id
                            INNER JOIN types ON p.types_id = types.id
                            INNER JOIN printer_models as prm ON p.model = prm.id
                            ORDER BY p.created_at DESC");
    }


}