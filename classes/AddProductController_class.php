<?php 
//This is a controller which is used to add products to the database.
//It extends from the abstract class "ProductManager" in order to use the
//"set_product" method
namespace app\classes;

class  AddProductController_class extends ProductManager_class{

	private $sku_no;
	private $product_name;
	private $product_price;
	private $product_selector;
	private $product_description;

	public function __construct($sku_no, $product_name, $product_price, $product_selector, $product_description) {
      $this->sku_no = $sku_no;
      $this->product_name = $product_name;
      $this->product_price = $product_price;
      $this->product_selector = $product_selector;
      $this->product_description = $product_description;
	}

		public function set_product() {
	   $this->setProducts($this->sku_no, $this->product_name, $this->product_price, $this->product_selector, $this->product_description);
	}

		
}