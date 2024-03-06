<?php 
    define('Access', TRUE);

    //START SESSION
    include "./AdditionalPHP/startSession.php";
    include_once 'connection.php';

    
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Boulangerie | Product Description</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--========== CSS FILES ==========-->
    <link rel="stylesheet" type="text/css" href="Common.css">
    <link rel="stylesheet" type="text/css" href="Sanjana.css">
    <link href="jquery.nice-number.css" rel="stylesheet">
    <!--========== JQUERY CDN ==========-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="jquery.nice-number.js"> </script>
    <script type="text/javascript"> 
    $(function(){
        $('input[type="number"]').niceNumber();
    });
    </script>


    <!--========== BOOTSTRAP ==========-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    
    <?php
    //CART QUANTITY VALUE
    include_once 'numOfItemsInCart.php';
    ?>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--========== BOXICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    

    </head>

    <body>
          <!--========== PHP QUERIES ==========-->
          <?php 
                
                $Q_fetch_featured = "SELECT * FROM products INNER JOIN product_type ON products.productID = product_type.productID WHERE product_type.typeID = 2"; //selects featured products
                $Q_fetch_new = "SELECT * FROM products INNER JOIN product_type ON products.productID = product_type.productID WHERE product_type.typeID = 1"; //selects new products
                $Q_fetch_product_details = "SELECT * FROM products INNER JOIN product_type ON products.productID = product_type.productID WHERE product_type.typeID = 2"; //selects product with id =1
    
            ?>
              <?php $page = 'product'?>

        <!--========== PHP FETCH PRODUCT DETAILS ==========-->
        <?php
           
             if(isset($_GET['product_id'])){ //if(isset($_GET['product_id'])){
                $product_id = $_GET['product_id'];
                
                //******* start get products details *******
                //query
                $Q_get_product = "SELECT * FROM products WHERE productID = '$product_id'";
                //run query
                $run_get_product = mysqli_query($conn, $Q_get_product);
                //store details in array
                $row_product = mysqli_fetch_array($run_get_product);
                //******* end get products details *******

                //******* start get products type *******
                $Q_get_type_id = "SELECT * FROM product_type WHERE productID = '$product_id'";
                $run_get_type_id = mysqli_query($conn, $Q_get_type_id);
                $row_type_id = mysqli_fetch_array($run_get_type_id);
                //******* end  get products type *******

                //******* start get products category *******
                $Q_get_cat_id = "SELECT * FROM product_category WHERE productID = '$product_id'";
                $run_get_cat_id = mysqli_query($conn, $Q_get_cat_id);
                $row_cat_id = mysqli_fetch_array($run_get_cat_id);
                //******* end  get products category *******

                //declare variables for all column headers
                $p_name = $row_product['p_name'];
                $p_desc = $row_product['p_desc'];
                $p_img = $row_product['p_img'];
                $p_price = $row_product['p_price'];
                $typeID = $row_type_id['typeID'];
                $categoryID = $row_cat_id['categoryID'];             
            }
            
          
        ?>

        <!--PRODUCT DETAILS GRID-->
        
        <div class="container mx-auto mt-0 pt-0 ">
            <!-- <form method="POST" action="index.php?action=add&id=<?php //echo $product_id; ?>"> -->
                <div class="row continue-shop-div text-center">
                    <a href="products.php" class="button continue" id="cat-but" >Continue</a>
                    <!-- <button class="dropbtn button" id="cat-but"></button> -->
                </div>
                <div class="row">
                    <div class="col-md mt-4 mx-auto ">
                        <img src="<?php echo $p_img;?>" class="product-image" />
                    </div>
                    <div class="col mt-4">
                        <h1><?php echo $p_name;?></h1>
                        <h2>&#8377; <?php echo $p_price;?></h2>
                        <!-- INPUT QUANTITY -->
                        <form id="form-pd" method="POST" action="product.php?action=add&product_id=<?php echo $product_id; ?>">
                            <div class="box my-4">
                                <label class="subtitle" style="margin-left: 2.7rem; 
                                margin-bottom: .8rem; font-weight: 700; color: grey; ">Quantity</label><br>
                                <input type="number" value="1" min="1" max="100" name= "input_quantity" id= "input_quantity" class="input-quantity mx-2 p-3 px-4">
                                <input type="hidden" name="name" value="<?php echo $p_name;?>" />
                                <input type="hidden" class="show_id" name="productID_id" value="<?php echo $product_id;?>" />
                                <input type="hidden" name="price" value="<?php echo $p_price;?>" /> <br>
                                <!-- <input type="submit" name="add-to-cart" id="add-to-cart-btn" value="Add to Cart" class="btn btn-primary btn-lg my-4 button" /> -->

                            </div>
                        </form>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="product-description my-3">
                        <div class="description">
                            <h2>Description</h2>
                        </div>
                        <div class="para_details py-2 px-4 my-3 ">
                            <p>
                                <?php echo $p_desc;?>
                            </p>
                        </div>
                    </div>
                </div>

            <!-- </form> -->

        </div>

        <!-- <script src="Javascript\main.js?<?php //echo filemtime('Javascript\main.js'); ?>" ></script> -->
    </body>
</html>