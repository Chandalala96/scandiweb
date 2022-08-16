<?php 

  //This is a class that is used to create the product description which
  //is used when adding products to the database.

namespace app\classes; 

class ProductDesc_class{

	private $dvd_size;
	private $furniture_height;
	private $furniture_width;
	private $furniture_length;
	private $book_weight;

   public function __construct($dvd_size, $furniture_height, $furniture_width,  $furniture_length, $book_weight) {
   	 $this->dvd_size = $dvd_size;
   	 $this->furniture_height = $furniture_height;
   	 $this->furniture_width = $furniture_width;
   	 $this->furniture_length = $furniture_length;
   	 $this->book_weight = $book_weight;
   }

    //This method is for creating DVD description
   public function getDVDDesc() {
   	return "Size: " . $this->dvd_size ."MB";
   }
    
     //This method is for creating Furniture description
   public function getFurnitureDesc() {
   	return "Dimensions: " . $this->furniture_height . "x". $this->furniture_width . "x". $this->furniture_length . "";
   }
    
     //This method is for creating Book description
   public function getBookDesc() {
   	return "Weight: " . $this->book_weight . "KG";
   }
}