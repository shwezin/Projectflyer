<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Model as Moloquent;


class Flyer extends Moloquent
{
    protected $collection = 'flyers';

    protected $fillable = [
	'street',
	'city',
	'zip',
	'state',
	'country',
	'price',
	'description',
	];

	public function photos()
	{
		return $this->hasMany('App\Photo');
	}
}
