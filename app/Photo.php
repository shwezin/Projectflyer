<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Model as Moloquent;

class Photo extends Moloquent
{
    protected $collection = 'flyer_photos';

    protected $fillable = [
	'photo'
	];

	public function flyer()
	{
		return $this->belongsTo('App\Flyer');
	}
}
