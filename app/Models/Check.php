<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{

	protected $table = 'check';

	protected $fillable = ['catridge_name', 'price', 'master', 'influence'];



}
