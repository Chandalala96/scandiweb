<?php
require_once __DIR__.'/../vendor/autoload.php';
use app\classes\ProductView_class;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
        <!----Bottstrap 5-------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
          <nav class="navbar navbar-light">
            <div class="container navigation">
              <h1>Product List</h1>
              <div class="d-flex">
                <a class="btn me-4" href="/addproduct">ADD</a>
                <button class="btn" form="productList-form" name="delete_btn" type="submit" id="delete-product-btn">MASS DELETE</button>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <section class="mt-3">
          
            <div class="container product-list">
               
                    <?php 
                    //Instantiatig a new object from the "ProductView" class in order to
                    //display the products by using the "getProduct()" method
                   $product_cards = new ProductView_class();
                   $product_cards->getProduct();
                    ?>
              
            </div>
            
        </section>
        <p class="text-center mt-3">Scandiweb Test Assignment</p>
    </main>
</body>
</html>