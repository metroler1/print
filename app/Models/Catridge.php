<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catridge extends Model
{
	protected $fillable=['current_id', 'manifacture', 'model', 'type', 'location', 'master', 'auxiliary'];
}
