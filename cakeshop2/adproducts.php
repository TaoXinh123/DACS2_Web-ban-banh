<?php 
// session_start();

include('function/userfunction.php');
include('Includes/adheader.php'); 

$category_name= $_GET['category'];
$category_data = getNameActive("categories",'p_cat_name', $category_name);
$category = mysqli_fetch_array($category_data);


$cid= $category['categoryID'];

?>
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
        <a class="text-white" href="adcategory.php"> Home/ </a>    
        
        <a class="text-white" href="adcategory.php">collection/</a>    
        
            <?= $category['p_cat_name']; ?></h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $category['p_cat_name']; ?></h1>
                <hr>
                <div class="row">
                
                <!-- <button class="btn btn-primary">Testing </button> -->
                <?php 

                    $products= getProByCategory("$cid");
                    if(mysqli_num_rows($products) > 0){
                        foreach($products as $item){
                            ?>
                            <div class="col-md-4 mb-2">
                                <a href="adproduct_view.php?adproduct=<?=$item['productID']; ?>">
                                    <div class="card shadow">
                                        <div class="card-body">
                                           
                                            <h4 class="text-center" > <?= $item['p_name']; ?></h4>


                                        </div>
                                    </div>
                                    </a>
                            </div>

                            <?php
                        }
                    }else{
                        echo "No data avaliable ";
                    }

                ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('Includes/adfooter.php');   ?>