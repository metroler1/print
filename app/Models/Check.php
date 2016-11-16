<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class Check extends Model
{

    protected $table = 'check';

    protected $fillable = ['catridge_name', 'price', 'manifacture', 'type_of_repair', 'master', 'influence'];

//    public function scopeBillListsMaksim($query)
//    {
//        $query->where('master_id', '1')
//            ->groupBy('influence')
//            ->having('influence', '>', '0');
//    }

    public function bill($master)
    {
        return DB::select("SELECT c.influence, c.master_id as master
                           FROM `check` as c
                           WHERE c.master_id = $master
                           GROUP BY c.influence
                           HAVING c.influence > 0
                           ");
    }

//    public function scopeBillListsVladimir($query)
//    {
//        $query->where('master_id', '2')
//            ->groupBy('influence')
//            ->having('influence', '>', '0');
//    }

    public function getDetailBill($influence, $master)
    {

        return DB::select("SELECT c.catridge_current_id, c.price, c.catridge_model, c.influence, manifacture.manifacture, 
                                  type_of_service_on_cartridges.name as type_of_repair,
                                  master.master_name, office.office_name
                           FROM `check` as c                           
                           INNER JOIN manifacture on c.manifacture_id = manifacture.id
                           INNER JOIN type_of_service_on_cartridges on c.type_of_repair_id = type_of_service_on_cartridges.id
                           INNER JOIN master on c.master_id = master.id                            
                           INNER JOIN office on c.office_id = office.id                                               
                           WHERE c.influence = $influence AND master.id = $master
        ");

    }

    public function sum(array $arr)
    {
        foreach ($arr as $key =>  $el)
        {
            $sum[] = $el->price;
        }

        return array_sum($sum);
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
