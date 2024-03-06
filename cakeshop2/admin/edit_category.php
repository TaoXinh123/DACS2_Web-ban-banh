<?php include('include/header.php');
    include('../middlewere/adminMiddlewere.php');
?>

<div class="container">
    <div class="row">
        <!-- <h2>Hello admin</h2> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit products </h4> 
                    
                </div>
                <?php 
              
                if(isset($_GET['categoryID'])){
                    $id= $_GET['categoryID'];
                    $category= getByCatID("Categories", $id);

                    if(mysqli_num_rows($category)>0){
                        $data = mysqli_fetch_array($category );
                   
                ?>
           
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                      

                            <div class="col-md-12">
                                <label for="" >Name</label>
                                <input type="hidden" name="id" value="<?= $data['categoryID']; ?> ">
                                <input type="text" name="name" value="<?=$data['p_cat_name'] ?>" placeholder="Enter category name" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="" >Description</label>
                                <textarea rows="3" name="meta_description"   placeholder="Enter meta descripton"  class="form-control"><?=$data['p_cat_desc']; ?></textarea>
                                <!-- <input type="text" name="description" placeholder="Enter description " class="form-control"> -->
                            </div>
                           
                            <div class="col-md-12">
                                <button type="submit" name="update_category_btn" class="btn btn-primary">Update</button>
                            </div>
                        
                        </div>
                    </form>
                   
                </div>
                <?php 
                 }else{
                    echo "Product not found";
                 }

                }
                // else {
                //     echo "id missing from url";
                // }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>