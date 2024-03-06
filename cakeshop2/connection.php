<?php
//<!--========== PHP CONNECTION TO DATABASE ==========-->
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "cakeshop";
    //create connection
    $conn = mysqli_connect($host, $username, $pass, $dbname);
    //check connection
    if($conn){
        mysqli_query($conn, "SET NAMES 'utf8' ");
        // session_start();
        // echo 'Đã kết nối thành công';
        // echo '<br>';
    }else{
        echo 'Kết nối không thành công';
    }

?>