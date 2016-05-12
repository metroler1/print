<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class displacement extends Model
{
    protected $table = 'displacement';

    protected $fillable = ['catridge_cuurent_id', 'to_place', 'notice'];
}
