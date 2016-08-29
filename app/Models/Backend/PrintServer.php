<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class PrintServer extends Model
{
    protected $table = 'print_serveres';
    protected $fillable = ['name', 'description'];
}
