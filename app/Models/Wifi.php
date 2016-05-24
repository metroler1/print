<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    protected $table = 'wifi';
    protected $fillable = ['voucher_code', 'sliced', 'person_used', 'flag'];
}
