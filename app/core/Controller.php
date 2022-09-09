<?php  
namespace app\core;

class Controller{
//TODO: add a paramater for data later
	public function view($name, $data = []){
		include ('app/views/' . $name . '.php');
	}

}