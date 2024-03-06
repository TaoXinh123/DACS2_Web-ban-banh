<?php 
// session_start();

include('function/userfunction.php');
include('Includes/adheader.php'); 

?>
<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home/collection</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Collection</h1>
                <hr>
                <div class="row">

                
                <!-- <button class="btn btn-primary">Testing </button> -->
                <?php 
                    $category= getAllActive("categories");
                    if(mysqli_num_rows($category) > 0){
                        foreach($category as $item){
                            ?>
                            <div class="col-md-4 mb-2">
                                <a href="adproducts.php?category=<?= $item['p_cat_name']; ?>">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <h4 class="text-center" > <?= $item['p_cat_name']; ?></h4>


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