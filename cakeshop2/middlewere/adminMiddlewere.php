<?php 
    include('../function/myfunction.php');
    if(isset($_SESSION['auth'])){
        if($_SESSION['role_as !=1']){
            redirect("../admin/index1.php", "You are not authorized to access his page");
        }
    }

?>