<?php 
    include('connection.php');

    $productID = $_GET['productID'];

    //Lay ten san pham 
    echo $productID ;
    $noidung = $_POST['noidung'];
    echo $noidung;

     $sql = "INSERT TO binhluan(id_cmt, noidung, productID, userID) VALUES (NULL, '$noidung', '$productID', '25')";
     $query = mysqli_query($conn, $sql);
//     $p_name = mysqli_fetch_array($query)['p_name'];
//     echo $p_name;

//     //Lay noi dung binh luan 
//     $sql = "SELECT uname, noidung
//     FROM binhluan INNER JOIN products INNER JOIN user ON binhluan.productID=products.productID 
//     AND binhluan.userID=user.userID WHERE p_name LIKE '%$p_name%' 
//     ORDER BY id_cmt DESC LIMIT 0,5
//     ";
//    $ketqua =  mysqli_query($conn, $sql);
//     While($row = mysqli_fetch_array($ketqua)){
//         echo "<br>";
//         echo $row['noidung'];

//     }

?>
