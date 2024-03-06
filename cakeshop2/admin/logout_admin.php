<?php
    session_start();

    if(isset($_SESSION['Admin'])){
        unset($_SESSION['Admin']);

        $_SESSION['message'] = "Logout Successfully";
        header('location: ../index.php');
    }

?>


