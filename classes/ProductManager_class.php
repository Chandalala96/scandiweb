<?php 
//This is a Model Class that handles interactions with the database
namespace app\classes;

abstract class ProductManager_class extends DbConnect_class{
   
   //Method used to insert products
	   protected function setProducts($sku_no,  $product_name, $product_price, $product_selector, $product_description) {
      $stmt = $this->connect()->prepare('INSERT INTO products (sku_no,  product_name, product_price, product_selector, product_description) VALUES (?, ?, ?, ?, ?);');

      if(!$stmt->execute(array($sku_no,  $product_name, $product_price, $product_selector, $product_description))) {
          $stmt = null;
          header("location: ../addproduct.php?error=insertfailed");
          exit();
      } 
      
   }

   //Method used to fetch products
    protected function getProducts() {
    $sql = "SELECT * FROM products";
    $stmt1 = $this->connect()->prepare($sql);
    $stmt1->execute();

    $result = $stmt1->fetchAll();
    return $result;
  }
   
    //Method used to delete products
     protected function deleteProducts($extracted_ids) {
        foreach ($extracted_ids as $id) {
          $stmt = $this->connect()->prepare('DELETE FROM products WHERE product_id IN(?);');
           if(!$stmt->execute(array($id))) {
          $stmt = null;
          header("location: ../index.php?error=deletefailed");
          exit();
      } 
        }
      
   }
  

}