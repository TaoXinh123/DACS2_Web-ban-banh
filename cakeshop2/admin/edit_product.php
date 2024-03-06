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
              
                if(isset($_GET['productID'])){
                    $id= $_GET['productID'];
                    $products= getByID("Products", $id);

                    if(mysqli_num_rows($products)>0){
                        $data = mysqli_fetch_array($products );
                   
                ?>
           
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-12">
                                <label for="" >Catigories</label>
                                <!-- <input type="text" name="name" placeholder="Enter category name" class="form-control"> -->
                            <select name="typeID" style="width: 30%;  padding: 12px 20px;  margin: 8px 0;  border: 2px solid purple;  border-radius: 4px;">
                                <?php
                                $conn1=mysqli_connect("localhost","root","","cakeshop");
                                $kkq=mysqli_query($conn1,"SELECT * FROM categories");
                                while($row=mysqli_fetch_array($kkq))
                                {
                                    echo '<option value="'.$row['categoryID'].'">'.$row['p_cat_name'].'</option>';
                                }
                                ?>
         
                            </select> <br>
                            </div>

                            <div class="col-md-12">
                                <label for="" >Name</label>
                                <input type="hidden" name="id" value="<?= $data['productID']; ?> ">
                                <input type="text" name="name" value="<?=$data['p_name'] ?>" placeholder="Enter category name" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="" >Description</label>
                                <textarea rows="3" name="meta_description"   placeholder="Enter meta descripton"  class="form-control"><?=$data['p_desc']; ?></textarea>
                                <!-- <input type="text" name="description" placeholder="Enter description " class="form-control"> -->
                            </div>
                            <div class="col-md-12">
                                <label for="" > Upload Image</label>
                                <input type="file" name="image"  class="form-control">
                                <label for="">Current Image</label>
                                <input type="hidden" name="old_image" svalue="<?= $data['p_img']; ?>">
                                <img src="../<?php echo $data['p_img'] ?>" alt="" width="170px" height="150px">
                                
                            </div>
                            <div class="col-md-12">
                                <label for="" >Price</label>
                                <input type="text" name="price"  value="<?=$data['p_price']; ?>" placeholder="Enter price" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="update_product_btn" class="btn btn-primary">Update</button>
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