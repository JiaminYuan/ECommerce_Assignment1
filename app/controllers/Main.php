<?php  
namespace app\controllers;

class Main extends \app\core\Controller{
	private static $file = 'app/resources/counter.txt';
	public $counter;

	public function index(){
		$this->view ('Main/index');
	}

	public function aboutUs(){
		$this->view('Main/about_us');
	}


	public function counter(){
		if (file_exists($file)){
			$fr = fopen(self::$file, 'r');
			flock($fr, LOCK_EX);
			$counter = [];
			$i = 0;
			foreach ($messages as $message) {
				$item = new Main();
				$item->name = $message;
				$item->id = $i;
				$counter[] = $item;
				$i++;
			}
			flock($fr, LOCK_UN);
			fclose($fr);
			return $counter;
		}else{
			//$counter{"count":0};
		}
	}

}