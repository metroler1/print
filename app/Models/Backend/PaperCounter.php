<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaperCounter extends Model
{
//    protected $fillable = ['device_name', 'number_of', 'notice'];

    protected $fillable = ['user_name', 'pages', 'copies', 'date_dispatch', 'computer_name', 'printer_name', 'printserver_id'];



//    public function scopeGetFullData($query)
//    {
//        $query->select('user_name, paper_counters_pages, copies,')
//    }

    public function dta()
    {
        return DB::table('paper_counters as p')
                    ->select('p.user_name', 'p.pages', 'p.copies', 'p.date_dispatch', 'p.computer_name', 'p.printer_name', 'print_serveres.name as print_server')
                    ->join('print_serveres', 'p.printserver_id', '=' ,'print_serveres.id');
    }

    public function getWholeData()
    {
        return DB::select("SELECT paper_counters.user_name, paper_counters.pages, paper_counters.copies, paper_counters.date_dispatch, paper_counters.computer_name,
                                    paper_counters.printer_name
                            FROM paper_counters                            
                            ORDER BY paper_counters.user_name ASC");
    }

    public function scopeGetDispatchDate($query)
    {
        $query->select('date_dispatch');
    }

    public function scopeGetComputerName($query)
    {
        $query->select('computer_name');
    }

    public function paper()
    {
        return $this->belongsTo('App\Models\Backend\PrintServer', 'printserver_id', 'id');
    }

    
}
