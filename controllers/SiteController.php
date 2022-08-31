<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\classes\AddProductController_class;
use app\classes\ProductDesc_class;
use app\classes\DeleteProductController_class;



class SiteController extends Controller {  

    	public static function home() {
    		 $params = [
    		 	'name'=> 'tester'
    		 ];
		return Application::$app->router->renderview('home', $params);
		// return $this->render('home', $params);
	}

	public static function addproduct() {
		return Application::$app->router->renderview('addproduct');
	}

	public static function insertProduct(Request $request) {
	  $body = Application::$app->request->getBody();
		  $body = $request->getBody();

		  $productDescription = new ProductDesc_class($body['dvd_size'], $body["furniture_height"], $body["furniture_width"], $body["furniture_length"], $body["book_weight"]);


     
     $dvd_counter = 0;
     while($body["dvd_size"] > 0 && $dvd_counter < 1) {
         $dvd_desc = $productDescription->getDVDDesc();
         $addNewDVD = new AddProductController_class($body["sku_no"], $body["product_name"],$body["product_price"], $body["product_selector"], $dvd_desc);
   
       $addNewDVD->set_product();
       $dvd_counter++;
     }

     
  
      $furniture_counter = 0;
     while($body["furniture_height"] > 0 && $body["furniture_width"] > 0 && $body["furniture_length"] > 0 && $furniture_counter < 1) {
        $furniture_desc = $productDescription->getFurnitureDesc();
         $addNewFurniture = new AddProductController_class($body["sku_no"], $body["product_name"], $body["product_price"], $body["product_selector"], $furniture_desc);
   
       $addNewFurniture->set_product();
       $furniture_counter++;
     }

     
 
     $book_counter = 0;
     while($body["book_weight"] > 0 && $book_counter < 1) {
              $book_desc = $productDescription->getBookDesc();
         $addNewBook = new AddProductController_class($body["sku_no"], $body["product_name"], $body["product_price"], $body["product_selector"], $book_desc);
   
       $addNewBook->set_product();
       $book_counter++;
     }

    
       header("location: ../");

	
	}  

		public static function deleteProduct(Request $request) {
	  $body = Application::$app->request->getDeleteBody();
		  $body = $request->getDeleteBody();

			$all_ids = $body["checkbox-delete"];
         
         
 	
   $deleteProduct = new DeleteProductController_class($all_ids);
   $deleteProduct->delete_product();

     header("location: ../");
	
	}
}