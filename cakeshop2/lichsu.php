<?php 
   // include('include/header.php');
   define('Access', TRUE);

    //START SESSION
    include "./AdditionalPHP/startSession.php";

    //CONNECTION TO DATABASE : cakeshop
    include_once 'connection.php';
  //  include('Includes/PcNavBar.php');
    
   //  include('../middlewere/adminMiddlewere.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <title>Boulangerie | Order Confirmed</title>


        <!-- BOOTSTRAP CORE CSS -->

        <link href="checkout/bootstrap.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="checkout/form-validation.css" rel="stylesheet">

        <!-- ANIMATE.CSS  -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

      <style>
        table{
            width:100% ; 
            border-collapse: collapse;
            border: 1;
        }
      </style>

    </head>
<body>
    
</body>
</html>
<div class="container">
    <div class="row" >
        <!-- <h2>Hello admin</h2> -->
        <div class="col-md-12" >
            <div class="card">
                <div class="card-header">
                    <h1> Shopping list</h1>
                    
                    <!-- <img src="../Assets/images/products/banhmi.jpeg" alt=""> -->
                    <!-- <img src="../<?php echo $row['p_img'] ?>" alt=""> -->
                    <div class="card-body" id="products_table">
                        <table   >
                            <thead>
                                <tr>
                                <th>OrderID</th>
                                    <!-- <th>userID</th> -->
                                    <th>Name</th>
                                    <!-- <th>OrderID</th> -->
                                    <th >PaymentMethod</th>
                                    <th>status</th>
                                    <!-- <th>status</th> -->
                                    <th>createDate</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $order_id = $_SESSION['userID'];
                                $select =   "SELECT * FROM transaction  WHERE transaction.userID = $order_id"; 
                                   // $product  =getAll('transaction');
                                    $product = mysqli_query($conn,  $select);
                                    
                                    if(mysqli_num_rows($product) > 0){
                                        foreach($product as $item){
                                ?>
                                    <tr>
                                        <td><?= $item['orderID']; ?></td>

                                        <!-- <td>  
                                            <a href="../detail_product.php?product_id=<?= $item['orderID']; ?>" ><?= $item['userID']; ?></a>
                                        </td> -->
                                        <!-- <td>
                                            <img src="../<?php echo $item['p_img'] ?>" alt="" width="170px" height="140px">
                                        </td> -->
                                        <td><?= $item['name']; ?></td>
                                        <!-- <td><?= $item['orderID']; ?></td> -->
                                        <td><?= $item['paymentMethod']; ?></td>
                                        <td><?= $item['status']; ?></td>
                                        <td><?= $item['createDate']; ?></td>
                                        <!-- <td>
                                            <a href="edit_product.php?productID=<?= $item['phone']; ?>" class="btn btn-primary"></a>
                                            
                                        </td> -->
                                        <td>
                                                <!-- <input  type="hidden" name="productID" value="<?= $item['productID']; ?>" > -->
                                                <!-- <button type="button" style="background-color: red;"  class="btn btn-sm-danger delete_product_btn" value="<?= $item['productID']; ?> " >Delete</button> -->

                                        </td>
                                    </tr>
                                <?php
                                        }
                                    }else{
                                        echo "No records found";
                                    }
                                ?>
                            
                            </tbody>
                        </table>
                        <a href="index.php" class=" btn btn-primary btn-lg button" style="font-size:1.5vw;">Home</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

