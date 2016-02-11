<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flyer;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlyerController extends Controller
{
	public function create()
	{
		flash()->overlay('Success', 'Your flyer has been created');
		
		return view('flyers.create');
	}

	public function store(Requests\FlyerRequest $request)
	{
		Flyer::create($request->all());

		// session()->flash('flash_message','Flyer successfully created!');
		//flash('Success', 'Your flyer has been created');

		flash()->success('Success!', 'Your flyer has been created.');

		return redirect()->back();
	}

	public function show($zip, $street)
	{

		$street = str_replace('-', ' ', $street);

		return Flyer::locatedAt($zip, $street)->first();
		//return Flyer::where(compact('zip', 'street'))->first();
	}
}
