<?php
include('../admin/config/dbcon2.php');

function getAll($table){
    global $conn;
    $query= "SELECT * FROM $table";
    return $query_run = mysqli_query($conn, $query);
    
}

function getByID($table,$id ){
    global $conn;
    $query= "SELECT * FROM $table WHERE productID= '$id'";
    return $query_run = mysqli_query($conn, $query);
    
}

function getByCatID($table,$id ){
    global $conn;
    $query1= "SELECT * FROM $table WHERE categoryID= '$id'";
    return $query_run = mysqli_query($conn, $query1);
    
}


function redirect($url, $message) {
    echo '<script>';
    echo 'alert("' . $message . '");';
    echo 'window.location.href = "' . $url . '";';
    echo '</script>';
}
?>