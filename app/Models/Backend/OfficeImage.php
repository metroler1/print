<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OfficeImage extends Model
{
    protected $fillable = ['path', 'office_id', 'created_at', 'updated_at'];

    public function getImageList($id)
    {
        return DB::select("SELECT ofim.path, ofim.office_id FROM office_images as ofim where ofim.office_id = $id");
    }
}
