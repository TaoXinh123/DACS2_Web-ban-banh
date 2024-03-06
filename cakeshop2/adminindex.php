<?php 
// session_start();
include('function/userfunction.php');
include('Includes/adheader.php'); 
include('Includes/adslider.php');  


?>

<div class="py-5">
    <div class="container">
        <div class="row">
           
                <?php 
                    $trendingproduct = getAlltrending();
                    if(mysqli_num_rows($trendingproduct) > 0){
                        foreach($trendingproduct as $item){
                            ?>
                            <div class="col-md-4 mb-2">
                                <a href="adproducts.php?category=<?= $item['p_cat_name']; ?>">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <!-- <img src="/Assets/images/products/<?= $item['p_cat_name']; ?>" alt=""> -->
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
      
          



<?php include('Includes/adfooter.php');   ?>