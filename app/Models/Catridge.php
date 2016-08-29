<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Displacement;



class Catridge extends Model
{
	protected $fillable=['current_id', 'manifacture_id', 'model', 'types_id', 'location', 'master_id', 'auxiliary', 'notice', 'manifacture_id'];

//	public function scopeFromMaster($query, $master)
//	{
//		$query->where('master', $master)
//			->where('location', 'Мастерская');
//	}


//	public function scopeToMaster($query, $master)
//	{
//		$query->where('master', $master)
//			->where('location', 'Не работают')
//			->update(['location' => 'Мастерская']);
//	}

    public function master()
    {
        return $this->belongsTo('App\Models\Master');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'types_id');
    }

    public function manifacture()
    {
        return $this->belongsTo('App\Models\Backend\Manifacture');
    }


	public static function boot()
	{
		static::Updated(function($instance)
		{
			$users = new Displacement;

			$users->catridge_current_id = $instance->current_id;
			$users->to_place = $instance->location;
			$users->save();

		});
		parent::boot();
	}
}


