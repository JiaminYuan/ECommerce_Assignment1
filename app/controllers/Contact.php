<?php
namespace app\controllers;

class Contact extends \app\core\Controller{
	public function index(){
		//process the form data if it is submitted
		if(isset($_POST['action'])){
			//create a log object
			$newLog = new \app\controllers\Log();
			//populate the log object
			$newLog->email = $_POST['inputEmail'];
			$newLog->message = $_POST['inputMessage'];
			//call insert
			$newLog->insert();
			header('location:/Contact/read');
		}
		$this->view('Contact/index');
	}

	public function read(){
		//read the log.txt file into a variable
		$log = new \app\controllers\Log();
		$logs = $log->getAll();
		$this->view('Contact/read',$logs);
	}
}