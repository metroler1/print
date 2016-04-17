<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catridge extends Model
{
	protected $fillable=['current_id', 'manifacture', 'model', 'type', 'location', 'master', 'auxiliary'];

	public function scopeFromMaster($query, $master)
	{
		$query->where('master', $master)
			->where('location', 'Мастерская')
			->update(['location' => 'Склад']);
	}

	public function scopeToMaster($query, $master)
	{
		$query->where('master', $master)
			->where('location', 'Не работают')
			->update(['location' => 'Мастерская']);
	}
}


