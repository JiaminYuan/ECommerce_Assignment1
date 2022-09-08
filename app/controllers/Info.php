<?php
namespace app\controllers;

class Info{
	public function delete($email){
		//I would like to delete the record with a specific id
		$message = new \app\models\Food();
		$message->deleteAt($email);
		//redirect to the list
		header('location:/Contact/index');
	}


}