<?php  
namespace app\controllers;

class Main extends \app\core\Controller{
	private static $file = 'app/resources/counter.txt';
	public $counter;
	public $num;

	public function index(){
		$this->view ('Main/index');
	}

	public function about_Us(){
		$this->view('Main/about_us');
	}


	public function counter(){
		if (file_exists($file)){
			$fr = fopen(self::$file, 'r');
			flock($fr, LOCK_EX);
			$counter = [];
			$i = 0;
			foreach ($fr as $message) {
				$item = new Main();
				$item->num = $i + 1;
				$counter[] = $item;
				$i++;
			}
			flock($fr, LOCK_UN);
			fclose($fr);
			echo $counter;
			return $counter;
		}
		// else{
		// 	$counter{"count":0};
		// }
	}

	public function counterJSON(){
		// $dCounter = json_decode($counter);
		// echo(json_decode($counter));
		echo $counter;
	}

}
