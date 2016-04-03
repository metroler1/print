<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
	protected $fillable=['current_id', 'manifacture', 'model', 'type', 'place', 'catridge_has', 'auxiliary'];

//	public function type()
//	{
//		return $this->HasMany('App\Type', 'printer_type', 'type');
//
//	}
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}
}