<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class displacement extends Model
{
    protected $table = 'displacement';

    protected $fillable = ['catridge_model', 'to_place', 'notice'];
}
