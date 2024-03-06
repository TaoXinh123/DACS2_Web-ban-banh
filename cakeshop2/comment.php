<?php 
    include('connection.php');

    $productID = $_GET['productID'];

    //Lay ten san pham 
    $getname = "SELECT p_name FROM products WHERE productID = '$productID' ";
    $query = mysqli_query($conn, $getname);
    $p_name = mysqli_fetch_array($query)['p_name'];
    echo $p_name;

    //Lay noi dung binh luan 
    $sql = "SELECT uname, noidung
    FROM binhluan INNER JOIN products INNER JOIN user ON binhluan.productID=products.productID 
    AND binhluan.userID=user.userID WHERE p_name LIKE '%$p_name%' 
    ORDER BY id_cmt DESC LIMIT 0,5
    ";
   $ketqua =  mysqli_query($conn, $sql);
    While($row = mysqli_fetch_array($ketqua)){
        echo "<br>";
        echo $row['noidung'];

    }

?>
<form action="add_comment.php?productID=<?php echo $productID ?>" method="POST">
    <!-- <label for="">Add Comment</label> -->
    <input type="text" name="noidung" id="">
    <button type="submit">Comment</button>



</form>