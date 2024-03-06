<?php
    session_start();
    include('connection.php');


function getAllActive($table){
    global $conn;
    $query= "SELECT * FROM $table  ";
    return $query_run = mysqli_query($conn, $query);
    
}
function getAlltrending(){
    global $conn;
    $query= "SELECT * FROM categories ";
    return $query_run = mysqli_query($conn, $query);
    
}
function getNameActive($table,$table_query,$table_value ){
    global $conn;
    $query= "SELECT * FROM $table WHERE $table_query = '$table_value'";
    // echo $query;
    return $query_run = mysqli_query($conn, $query);
    
}
function getProByCategory($categoryID){
    global $conn;

    // $query= "SELECT * FROM product_category WHERE categoryID='$categoryID' ";
   $query = "SELECT * FROM products INNER JOIN product_category ON products.productID = product_category.productID WHERE product_category.categoryID =$categoryID";
    return $query_run = mysqli_query($conn, $query);
    
}


function getIDActive($table,$id ){
    global $conn;
    $query= "SELECT * FROM $table WHERE productID= '$id' AND status='0'";
    return $query_run = mysqli_query($conn, $query);
    
}

function redirect($url, $message) {
    echo '<script>';
    echo 'alert("' . $message . '");';
    echo 'window.location.href = "' . $url . '";';
    echo '</script>';
}

?>