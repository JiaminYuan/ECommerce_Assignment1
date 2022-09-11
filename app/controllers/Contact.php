<?php
namespace app\controllers;

class Contact extends \app\core\Controller{
	public function contact(){
			//process the form data if it is submitted
			if(isset($_POST['action'])){
				//create a info object
				$newInfo = new \app\controllers\Info();
				//populate the info object
				$newInfo->email = $_POST['new_Info'];
				$newInfo->message = $_POST['new_Info'];
				//call insert
				$newInfo->insert();
			}
			$this->view('Contact/index');
		}

	public function read(){
			$this->view('Contact/read');
			//read the log.txt file into a variable
			//$readInfo = new \app\controllers\Info();
			//$readInfos = $readInfo->getAll();
	}
}