<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CartidgeModel extends Model
{
    protected $table = 'cartridge_models';

    protected $fillable = ['model'];

    public function getList()
    {
        return DB::select("SELECT cm.model
                            FROM cartridge_models as cm");
    }

}
