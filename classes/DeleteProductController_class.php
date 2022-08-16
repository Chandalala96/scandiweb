<?php 
//This is a controller which is used to delete products from the database.
//It extends from the abstract class "ProductManager" in order to use the
//"delete_product" method
namespace app\classes;


class  DeleteProductController_class extends ProductManager_class{

	private $extracted_ids;


	public function __construct($extracted_ids) {
      $this->extracted_ids = $extracted_ids;
	}

		public function delete_product() { 
	   $this->deleteProducts($this->extracted_ids);
	}
		
}