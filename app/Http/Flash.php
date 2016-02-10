<<<<<<< HEAD
<?php 

	namespace App\Http;


	class Flash	{
		
		public function message($title, $message)
		{
			session()->flash('flash_message', [
					'title'		=> $title,
					'message'	=> $message
				]);
		}
	}

	//$flash->message('hello there');
	//$flash->error('')
	//$flash->aside()
	//$flash->overlay()
	//$flash->success()

 ?>
=======
<?php

namespace App\Http;

class Flash
{
	public function message($message)
	{
		session()->flash('flash_message',$message);
	}
}
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
