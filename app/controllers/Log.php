<?php
namespace app\controllers;

//self:: refers to the class
//$this-> refers to the object

class Log{
	public $email;
	public $message;
	private static $file = 'app/resources/log.txt';

	public function insert(){
		//add the new entry to the end of the file
		$fh = fopen(self::$file, 'a');
		flock($fh, LOCK_EX);
		fwrite($fh, "Email:" . $this->email . "\n" . "Message:" . $this->message. "\n". "\n");
		flock($fh, LOCK_UN);
		fclose($fh);
	}


	public function getAll(){
		$logs = file(self::$file);
		$output = [];//or array() to build an empty array
		foreach ($logs as $log) {
			$item = new Log();
			$item->email = $log;
			$item->message = $log;
			$output[] = $item;
		}
		return $output;
	}

}
