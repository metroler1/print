<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class PaperCounter extends Model
{
//    protected $fillable = ['device_name', 'number_of', 'notice'];

    protected $fillable = ['user_name', 'pages', 'copies', 'date_dispatch', 'computer_name', 'printer_name', 'printserver_id'];

//    public function scopeGetDataDate($query)
//    {
//        $query->groupBy('influence');
//    }
  

    public function scopeGetFullData($query)
    {
        $query->orderBy('user_name');
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
