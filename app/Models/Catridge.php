<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Displacement;



class Catridge extends Model
{
	protected $fillable=['current_id', 'manifacture', 'model', 'type', 'location', 'master', 'auxiliary'];

	public function scopeFromMaster($query, $master)
	{
		$query->where('master', $master)
			->where('location', 'Мастерская');
	}


	public function scopeToMaster($query, $master)
	{
		$query->where('master', $master)
			->where('location', 'Не работают')
			->update(['location' => 'Мастерская']);
	}


	public static function boot()
	{
		static::Updated(function($instance)
		{
			$users = new Displacement;

			$users->catridge_model = $instance->current_id;
			$users->save();

		});
		parent::boot();
	}
}


