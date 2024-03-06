<?php 
// session_start();
include('./config/dbcon2.php');
include('../function/myfunction.php');
if(isset($_POST['add_category_btn'])){

    $category = $_POST['categoryID'];
    $name= $_POST['name'];
    $meta_description= $_POST['meta-description'];


    $product_query = "INSERT INTO categories (p_cat_name,p_cat_desc ) VALUE ('$name','$meta_description')";
    $pr_query_run = mysqli_query($conn, $product_query);
    if($pr_query_run){
        // move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$image);
        
        redirect("add_category.php", "Category add successfully");

    }else{
        redirect("add_category.php", "Something went wrong".mysqli_errno($conn));
        

    }

}else if(isset($_POST['update_category_btn'])){

    $categoryID= $_POST['id'];
    $name= $_POST['name'];
    $meta_description= $_POST['meta_description'];
    
    $update_query = "UPDATE `categories` SET `p_cat_name`='$name',`p_cat_desc`='$meta_description' WHERE `categoryID`='$categoryID'";

    $update_query_run = mysqli_query($conn, $update_query);
    if($update_query_run){
    
        redirect("edit_category.php?id=$categoryID", "category update successfully");
      
    }else{
        redirect("edit_category.php?id=$categoryID", "Somehting went wrong ");
    }

}
else if(isset($_POST['delete_category_btn'])){
    $categoryID = mysqli_real_escape_string($conn, $_POST['categoryID']);
   
    $category_query = "SELECT * FROM categories WHERE categoryID= '$categoryID'";
    $category_query_run = mysqli_query($conn, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);

    $sql_category_product = "DELETE FROM products
                                WHERE EXISTS (
                                    SELECT 1
                                    FROM product_category
                                    WHERE products.productID = product_category.productID
                                    AND product_category.categoryID = $categoryID
                                );";
    $select_id_product = mysqli_query($conn,$sql_category_product);



    $delete_query= "DELETE FROM categories WHERE `categories`.`categoryID` = '$categoryID'";
    // $delete_query = "DELETE FROM products WHERE productID='$productID'";
     $delete_query_run = mysqli_query($conn, $delete_query);

     if($delete_query_run){
      
        // redirect("category.php", "category delete successfully");

        echo 200;
     }else{
        // redirect("category.php", "Something went wrong ". mysqli_error($conn));
        echo 500;
     }
}

else if(isset($_POST['add_product_btn'])){
        $category = $_POST['categoryID'];
        $name= $_POST['name'];
        $meta_description= $_POST['meta_description'];
        
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];

        $path = "../Assets/images/products";// link với file upload ta vơi cho ni ne

        // $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        // $filename = time().'.'.$image_ext;

        $product_query = "INSERT INTO products (p_name,p_desc,p_img,p_price ) VALUE ('$name','$meta_description','Assets/images/products/$image', '$price')";
        $pr_query_run = mysqli_query($conn, $product_query);

        $id_product = $conn->insert_id;

        $sql_category_product = "INSERT INTO `product_category`(`productID`, `categoryID`) VALUES ('$id_product','$category')";
        $pr_query_run_link = mysqli_query($conn, $sql_category_product);

        if($pr_query_run && $pr_query_run_link){
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$image);
            
            redirect("add_product.php", "Product add successfully");

        }else{
            redirect("add_product.php", "Something went wrong");
            

        }

    }else if(isset($_POST['update_product_btn'])){

        $productID= $_POST['id'];
        $name= $_POST['name'];
        $meta_description= $_POST['meta_description'];
        
        $price = $_POST['price'];
        $new_image = $_FILES['image']['name'];        
        $old_image = $_POST['old_image'];
        if($new_image !=""){
            $update_filename = $new_image;
        }else{
            $update_filename= $old_image;
        }

        $path = "../Assets/images/products";
        $update_query = "UPDATE `products` SET `p_name`='$name',`p_desc`='$meta_description',`p_img`='Assets/images/products/$new_image',`p_price`='$price' WHERE `productID`='$productID'";

        $update_query_run = mysqli_query($conn, $update_query);
        if($update_query_run){
            if($_FILES['image']['name'] != ""){
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$new_image);    
                if(file_exists("../Assets/images/products/".$old_image)){
                       unlink("../Assets/images/products/".$old_image)  ;  

                }else{
                    $_FILES['old_image']['name']= $_POST['image'];
                }
            
            }
            redirect("edit_product.php?id=$productID", "Produc update successfully");
        }else{
            redirect("edit_product.php?id=$productID", "Somehting went wrong ");
        }

    }
    else if(isset($_POST['delete_product_btn'])){
        $productID = mysqli_real_escape_string($conn, $_POST['productID']);
       
        $product_query = "SELECT * FROM products WHERE productID= '$productID'";
        $product_query_run = mysqli_query($conn, $product_query);
        $product_data = mysqli_fetch_array($product_query_run);
        $image = $product_data['p_img'];



        $delete_query="DELETE FROM products WHERE `products`.`productID` ='$productID'";
        // $delete_query = "DELETE FROM products WHERE productID='$productID'";
         $delete_query_run = mysqli_query($conn, $delete_query);

         if($delete_query_run){
            if(file_exists("../Assets/images/products/.$image")){
                unlink("../Assets/images/product/.$image");
            }
            // redirect("product.php", "product delete successfully");
            echo 200;
         }else{
            // redirect("product.php", "Something went wrong ". mysqli_error($conn));
            echo 500;
         }
    } 
    // else {
    //     header('location: index1.php');
    // }

?>
