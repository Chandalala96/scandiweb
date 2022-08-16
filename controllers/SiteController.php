<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;


class SiteController extends Controller {  

    	public static function home() {
    		 $params = [
    		 	'name'=> 'TrapSik'
    		 ];
		return Application::$app->router->renderview('home', $params);
		// return $this->render('home', $params);
	}

	public static function addproduct() {
		return Application::$app->router->renderview('addproduct');
	}

	public static function handleContact(Request $request) {
	  // $body = Application::$app->request->getBody();
		  $body = $request->getBody();

	   var_dump($body);
	   exit;
		return "Handling submitted data";
	}
}