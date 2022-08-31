<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    	<!----Bottstrap 5-------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-light">
            <div class="container navigation">
              <h1>Product Add</h1>
              <div class="d-flex">
                <button class="btn me-4" form="product-form" type="submit" name="add_product">SAVE</button>
                <a class="btn" href="/">CANCEL</a>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <section class="mt-3">
            <div class="container text-center product-list">
                <form id="product-form" method="POST" action="">
                    <div class="mb-3">
                        <div class="d-flex">
                            <label for="sku" class="form-label me-2 mt-2">SKU: </label>
                        <input type="text" class="form-control" id="sku" name="sku_no" placeholder="#sku" required>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="d-flex">
                            <label for="name" class="form-label me-2 mt-2">Name: </label>
                        <input type="text" class="form-control" id="name" name="product_name" placeholder="#name" required>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="d-flex">
                            <label for="price" class="form-label me-2 mt-2">Price ($): </label>
                        <input type="text" class="form-control" id="price" name="product_price" placeholder="#price" required>
                        </div>
                      </div>
                      <div class="mb-3">
                          <div class="d-flex">
                            <label for="productType" class="form-label me-2 mt-2" style="font-size: 14px;">Type Switcher: </label>
                            <select class="form-select" name="product_selector" id="productType" required>
                                <option selected>Type switcher</option>
                                <option value="DVD">DVD</option>
                                <option value="Book">Book</option>
                                <option value="Furniture">Furniture</option>
                              </select>
                          </div>

                      </div>
                  
               
                
                <div class="dynamic-form-cont" style="display: none">
                <div class="text-center mb-3">
                    <div class="dynamic-form" data-bs-toggle="tooltip" data-bs-placement="top" title="Please, provide size" id="DVD">
                        <div class="mb-3">
                            <div class="d-flex">
                                <label for="size" class="form-label me-2 mt-2">Size (MB): </label>
                            <input type="number" class="form-control" name="dvd_size" id="size" placeholder="#size">
                            </div>
                          </div>
                        </div>
                </div>
                <div class="text-center mb-3">
                    <div class="dynamic-form" data-bs-toggle="tooltip" data-bs-placement="top" title="Please, provide dimensions" id="Furniture">
                        <div class="mb-3">
                            <div class="d-flex">
                                <label for="height" class="form-label me-2 mt-2">Height (CM): </label>
                            <input type="number" class="form-control" name="furniture_height" id="height" placeholder="#height">
                        </div>
                        <div class="d-flex mt-2">
                            <label for="width" class="form-label me-2 mt-2">Width (CM): </label>
                            <input type="number" class="form-control" name="furniture_width" id="width" placeholder="#width">
                            </div>
                            <div class="d-flex mt-2">
                            <label for="length" class="form-label me-2 mt-2">Length (CM): </label>
                            <input type="number" class="form-control" name="furniture_length" id="length" placeholder="#length">
                            </div>
                          </div>
                        </div>
                </div>
                <div class="text-center mb-3">
                    <div class="dynamic-form" data-bs-toggle="tooltip" data-bs-placement="top" title="Please, provide weight" id="Book">
                        <div class="mb-3">
                            <div class="d-flex">
                                <label for="weight" class="form-label me-2 mt-2">Weight (KG): </label>
                            <input type="number" class="form-control" id="weight" name="book_weight" placeholder="#weight">
                            </div>
                          </div>
                        </div>
                </div>
                </div>
            </form>
            </div>
        </section>
        <p class="text-center mt-3">Scandiweb Test Assignment</p>
    </main>
     
    <!---jQuery link---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <!---Javascript file for the Type switcher--->
    <script src="filter.js"></script>
</body>
</html> -->