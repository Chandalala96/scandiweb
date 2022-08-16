<?php 

require_once __DIR__.'/../vendor/autoload.php';


use app\classes\DeleteProductController_class;

//This code runs when the mass delete button is clicked
 if(isset($_POST["delete_btn"])) {
 
 	$all_ids = $_POST["checkbox-delete"];
 
 	
   $deleteProduct = new DeleteProductController_class($all_ids);
   $deleteProduct->delete_product();

     header("location: ../");
 }