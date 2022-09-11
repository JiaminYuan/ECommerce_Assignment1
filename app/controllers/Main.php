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