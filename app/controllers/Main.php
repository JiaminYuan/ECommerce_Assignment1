<?php  
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view ('Main/index');
	}

	public function aboutUs(){
		$this->view('Main/about_us');
	}

	public function contact(){
		$this->view('Contact/index');
	}

	public function message(){
		$this->view('Contact/read');
	}

}