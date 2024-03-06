<?php
include('function/userfunction.php');
include('Includes/adheader.php'); 

if(isset($_GET['adproduct'])){
    $product_name = $_GET['adproduct'];
    $product_data = getNameActive("products","productID",$product_name);
    $product = mysqli_fetch_array($product_data);

    if($product){
        ?>
        <div class="container">
            <div class="col-md-4">
            <img src="<?php echo $product['p_img'] ?>" alt="" width="170px" height="140px">
            </div>
            <div class="col-md-8">
                <h4><?=$product['p_name']; ?></h4>
                <hr>
                <h4><?= $product['p_desc']; ?></h4>
                <h4><?= $product['p_price']; ?></h4>
            </div>
        </div>

        <?php 
    }else{
        echo "Product not found";
    }
}
else {
    echo "Something went wrong ";

}

include('Includes/adfooter.php');
?>