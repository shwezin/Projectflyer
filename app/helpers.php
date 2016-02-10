<<<<<<< HEAD
<?php 
		
		function flash($title, $message)
		{
			$flash = app('App\Http\Flash');

			return $flash->message($title, $message);
		}

 ?>
=======
<?php

function flash($message)
{
	$flash = app('App\Http\Flash');

	return $flash->message($message);
}
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
