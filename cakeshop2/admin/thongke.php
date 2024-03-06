<?php 
    include('include/header.php');
     include('../middlewere/adminMiddlewere.php');

?>

<div class="container">
    <div class="row" >
        <!-- <h2>Hello admin</h2> -->
        <div class="col-md-12" >
            <div class="card">
                <div class="card-header">
                    <h4> Shopping list</h4>
                    <!-- <img src="../Assets/images/products/banhmi.jpeg" alt=""> -->
                    <!-- <img src="../<?php echo $row['p_img'] ?>" alt=""> -->
                    <div class="card-body" id="products_table">
                        <table class="table table-bordered table-striped w-100" >
                            <thead>
                                <tr>
                                    <th>orderID</th>
                                    <!-- <th>userID</th> -->
                                    <th>Name</th>
                                    <th>OrderID</th>
                                    <th >PaymentMethod</th>
                                    <th>status</th>
                                    <!-- <th>status</th> -->
                                    <th>createDate</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $product  =getAll('transaction');
                                    //$product = mysqli_query($conn, $select);
                                    
                                    if(mysqli_num_rows($product) > 0){
                                        foreach($product as $item){
                                ?>
                                    <tr>
                                        <td><?= $item['tranID']; ?></td>

                                        <!-- <td>  
                                            <a href="../detail_product.php?product_id=<?= $item['orderID']; ?>" ><?= $item['userID']; ?></a>
                                        </td> -->
                                        <!-- <td>
                                            <img src="../<?php echo $item['p_img'] ?>" alt="" width="170px" height="140px">
                                        </td> -->
                                        <!-- <td >
                                            <?= $item['userID']; ?>
                                            </div>
                                        </td> -->
                                
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['orderID']; ?></td>
                                        <td><?= $item['paymentMethod']; ?></td>
                                        <td>
                                            <?php 
                                                if($item['status']==1)
                                                {
                                            ?>
                                                <a href="xuly.php?status=0&tranID=<?= $item['tranID'] ?>">
                                                    Processing
                                                </a> 
                                            <?php 
                                                } else
                                                {
                                                    echo "<span style='color:red' >Processed</span>";
                                                }
                                            ?>
                                            
                                        </td>
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
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>