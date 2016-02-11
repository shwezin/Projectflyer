<?php

function flash($title = null, $message = null)
{
	 $flash = app('App\Http\Flash');

	// session()->flash('flash_message', [
	// 		'title'		=>  $title,
	// 		'message'	=>  $message
	// 	]);

	 if(func_num_args() == 0){
	 	return $flash;
	 }

	return $flash->overlay($title, $message);
}
