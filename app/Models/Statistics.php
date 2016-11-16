<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistics extends Model
{
    public function getPaperFilter1()
    {
        return DB::select('SELECT pc.user_name
                            FROM paper_counters as pc
                            GROUP BY pc.user_name
                            ');
    }

    public function getPaperFilter2()
    {
        return DB::select('SELECT ps.name as printservers
                            FROM print_serveres as ps
                            ');
    }

    public function getFilterPrice()
    {
        return DB::select('SELECT o.office_name, m.master_name, t.name as service
                            FROM office as o
                            LEFT JOIN master as m ON m.id = o.id
                            LEFT JOIN type_of_service_on_cartridges as t ON o.id = t.id
                            ');
    }

    public function paperStatistic()
    {
        return DB::select("SELECT pc.date_dispatch as date, pc.printer_name, pc.pages
                            FROM paper_counters as pc                            
                            ");
    }

    public function priceStatistic()
    {
        return DB::select("SELECT c.price, c.catridge_model, c.influence, master.master_name as master, office.office_name, tof.name as service
                            FROM `check` as c
                            INNER JOIN master ON master.id = c.master_id
                            INNER JOIN office ON office.id = c.office_id
                            INNER JOIN type_of_service_on_cartridges  as tof ON tof.id = c.type_of_repair_id
                            ");
    }
    
    
    
}
