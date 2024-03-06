<?php include('include/header.php'); ?>

<div class="container">
    <div class="row">
        <!-- <h2>Hello admin</h2> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Products </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-12">
                                <label for="" >Catigories</label>
                                <!-- <input type="text" name="name" placeholder="Enter category name" class="form-control"> -->
                            <select name="categoryID" style="width: 30%;  padding: 12px 20px;  margin: 8px 0;  border: 2px solid purple;  border-radius: 4px;">
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
                                <input type="text" name="name" placeholder="Enter product name" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="" >Description</label>
                                <textarea rows="3" name="meta_description" placeholder="Enter meta descripton"  class="form-control"></textarea>
                                <!-- <input type="text" name="description" placeholder="Enter description " class="form-control"> -->
                            </div>
                            <div class="col-md-12">
                                <label for="" > Upload Image</label>
                                <input type="file" name="image" placeholder="Enter product image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="" >Price</label>
                                <input type="text" name="price" placeholder="Enter price" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="add_product_btn" class="btn btn-primary">Save</button>
                            </div>
                        
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?> // chổ insert sản phẩm trong admin của mi đâu á