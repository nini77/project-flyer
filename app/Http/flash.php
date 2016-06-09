<?php 

namespace App\http;

class Flash{

	public function message($title,$message)
	{
		session()->flash('flash_message',[

			'title' => $title,
			'message' =>$message,
			'level' => 'info'
		]);
	}

	public function success($title,$message)
	{
		session()->flash('flash_message',[

			'title' => $title,
			'message' =>$message,
			'level' => 'success'
		]);
	}

}


 ?>