<?php 

namespace App\http;

class Flash{

	public function message($message)
	{
		session()->flash('flash_message',$message);
	}


}


 ?>