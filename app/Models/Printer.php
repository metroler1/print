<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
	protected $fillable=['current_id', 'manifacture', 'model', 'type', 'place', 'catridge_has', 'master', 'auxiliary'];

}