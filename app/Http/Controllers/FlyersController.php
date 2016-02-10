<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FlyerRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlyersController extends Controller
{
    public function create()
    {

    	//flash('Hello World', 'This is the message');	

    	return view('flyers.create');
    }

    public function store(FlyerRequest $request)
    {
    	Flyer::create($request->all());

    	flash('Flyer successfully created!');

    	return redirect()->back(); 
    }
}
