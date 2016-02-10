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
		flash('Hello World');
		
		return view('flyers.create');
	}

	public function store(Requests\FlyerRequest $request)
	{
		Flyer::create($request->all());

		// session()->flash('flash_message','Flyer successfully created!');
		flash('Flyer successfully created!');
		return redirect()->back();
	}
}
