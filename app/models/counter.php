<?php
namespace app\models;

class counter{
	public $num;
	private static $file = 'app/resources/counter.txt';

	public function insert(){
		//add the new entry to the end of the counter.txt file
		//fh = file handle
		$fh = fopen(self::$file,'a');
		flock($fh, LOCK_EX);
		fwrite($fh, $this->name . "\n");
		flock($fh, LOCK_UN);
		fclose($fh);
	}

}