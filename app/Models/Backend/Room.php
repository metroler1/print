<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    protected $fillable = ['rooms', 'office_id'];

    public function getListRooms($id)
    {
        return DB::select("SELECT r.id, r.rooms, r.office_id FROM rooms as r
                          WHERE r.office_id = $id");
    }
}
