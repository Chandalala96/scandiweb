<?php 

require_once __DIR__.'/../vendor/autoload.php';

  use app\classes\AddProductController_class;
  use app\classes\ProductDesc_class;


//This code runs when the Add button is clicked
if(isset($_POST["add_product"])) {
    $sku_no = $_POST["sku_no"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_selector = $_POST["product_selector"];
    $dvd_size =  $_POST["dvd_size"];
    $furniture_height = $_POST["furniture_height"];
    $furniture_width = $_POST["furniture_width"];
    $furniture_length = $_POST["furniture_length"];
    $book_weight = $_POST["book_weight"];


$productDescription = new ProductDesc_class($dvd_size, $furniture_height, $furniture_width, $furniture_length, $book_weight);


     // Adding DVDs
     $dvd_counter = 0;
     while($dvd_size > 0 && $dvd_counter < 1) {
         $dvd_desc = $productDescription->getDVDDesc();
         $addNewDVD = new AddProductController_class($sku_no, $product_name,$product_price, $product_selector, $dvd_desc);
   
       $addNewDVD->set_product();
       $dvd_counter++;
     }

     //Adding Furniture
  
      $furniture_counter = 0;
     while($furniture_height > 0 && $furniture_width > 0 && $furniture_length > 0 && $furniture_counter < 1) {
        $furniture_desc = $productDescription->getFurnitureDesc();
         $addNewFurniture = new AddProductController_class($sku_no, $product_name,$product_price, $product_selector, $furniture_desc);
   
       $addNewFurniture->set_product();
       $furniture_counter++;
     }

     //Adding Books
 
     $book_counter = 0;
     while($book_weight > 0 && $book_counter < 1) {
              $book_desc = $productDescription->getBookDesc();
         $addNewBook = new AddProductController_class($sku_no, $product_name,$product_price, $product_selector, $book_desc);
   
       $addNewBook->set_product();
       $book_counter++;
     }

    //Goin back to front page
       header("location: ../");

}