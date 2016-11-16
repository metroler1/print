<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PrinterModel extends Model
{
    protected $fillable = ['model'];

    public function getList()
    {
        return DB::select("SELECT pm.model
                            FROM printer_models as pm");
    }
}
