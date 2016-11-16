<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Displacement;
use Illuminate\Support\Facades\DB;

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


    public function getCartridge()
    {
        return DB::select("SELECT c.id, c.location, c.current_id, c.auxiliary, manifacture.manifacture, master.master_name, types.type, cartridge_models.model
                            FROM catridges as c
                            INNER JOIN manifacture ON c.manifacture_id = manifacture.id
                            INNER JOIN master ON c.master_id = master.id
                            INNER JOIN types ON c.types_id = types.id
                            INNER JOIN cartridge_models ON c.model = cartridge_models.id
                            ORDER BY c.current_id");
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


