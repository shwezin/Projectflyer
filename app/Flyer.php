<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

use Jenssegers\Mongodb\Model as Moloquent;


class Flyer extends Moloquent
{
    protected $collection = 'flyers';

    protected $fillable = [
=======
use Jenssegers\Mongodb\Model as Moloquent;

class Flyer extends Moloquent
{
	protected $collection = 'flyers';

	protected $fillable = [
	'id',
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
	'street',
	'city',
	'zip',
	'state',
	'country',
	'price',
	'description',
	];

<<<<<<< HEAD
	public function photos()
	{
		return $this->hasMany('App\Photo');
=======
	public function user()
	{
		return $this->belongsTo(User::class);
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
	}
}
