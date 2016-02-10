<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

=======
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
use Jenssegers\Mongodb\Model as Moloquent;

class Photo extends Moloquent
{
<<<<<<< HEAD
    protected $collection = 'flyer_photos';

    protected $fillable = [
	'photo'
	];

	public function flyer()
	{
		return $this->belongsTo('App\Flyer');
=======
	protected $collection = 'flyer_photos';

	protected $fillable = ['photo'];

	public function flyer()
	{
		return $this->belongsTo(Flyer::class);
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
	}
}
