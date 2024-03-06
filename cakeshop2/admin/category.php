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
                    <h4>Edit Category</h4>
                    <!-- <img src="../Assets/images/products/banhmi.jpeg" alt=""> -->

                    <div class="card-body" id="category_table">
                        <table class="table table-bordered table-striped w-100" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <!-- <th>Image</th> -->
                                    <th >Description</th>
                                    <th>Action</th>
                                    <!-- <th>Delete</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $product = getAll('categories');
                                    if(mysqli_num_rows($product)>0){
                                        foreach($product as $item){
                                ?>
                                    <tr>
                                        <td><?= $item['categoryID']; ?></td>
                                        <td><?= $item['p_cat_name']; ?></td>
                                        <!-- <td>
                                            <img src="../<?php echo $item['p_img'] ?>" alt="" width="170px" height="140px">
                                        </td> -->
                                        <td >
                                            <div class="description" style="width: 200px; height: 100px; word-break: break-all; overflow-x: scroll;">
                                            <?= $item['p_cat_desc']; ?>
                                            </div>
                                        </td>
                                
                        
                                        <td>
                                            <a href="edit_category.php?categoryID=<?= $item['categoryID']; ?>" class="btn btn-primary">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['categoryID']; ?>" >Delete</button>
                                            
                                        </td>

                                        <!-- <td>
                                             <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['categoryID']; ?>" >Delete</button>
                                        </td> -->
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