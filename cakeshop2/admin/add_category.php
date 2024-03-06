<?php include('include/header.php'); ?>

<div class="container">
    <div class="row">
        <!-- <h2>Hello admin</h2> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add category </h4>
                </div>

                <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                        <label for="" >Name</label>
                    <input type="text" name="name" placeholder="Enter category name" class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label for="" >Description</label>
                        <textarea name="meta-description" placeholder="Enter description"  class="form-control" id="" cols="30" rows="10"></textarea>
                        <!-- <input type="text" name="description" placeholder="Enter description " class="form-control"> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="add_category_btn" class="btn btn-primary">Save</button>
                    </div>
                </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>