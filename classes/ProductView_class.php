<?php 
 //This is a View class that is used to fetch and display Products on the Product List page
//it extends from the abstract class "ProductManager" in order to use the "getProducts" method

namespace app\classes;

class ProductView_class extends ProductManager_class {
   public function getProduct() {
      $results = $this->getProducts();
      echo '<form method="POST" class="form-control" action="./actions/deleteProducts_action.php" id="productList-form">';
      echo ' <div class="row">';
      foreach ($results as $result) {
         echo ' <div class="col-sm-3 mb-5">
                        <div class="card text-center" >
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input delete-checkbox" type="checkbox" name="checkbox-delete[]" value="'. $result["product_id"] . '">
                                  </div>
                              <p class="card-text">'. $result["sku_no"] . '</p>
                              <p class="card-text">'. $result["product_name"] . '</p>
                              <p class="card-text"> $ '. $result["product_price"] . '</p>
                              <p class="card-text">'. $result["product_description"].'</p>
                            </div>
                          </div>
                    </div>';
      }
      echo '<div>';
      echo '</form>';
   }
}