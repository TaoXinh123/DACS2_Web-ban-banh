<?php
include "../connection.php";
        if(isset($_GET['status']))
        {
            // echo "ok"; exit();
            $tranID=$_GET['tranID'];
        // echo " UPDATE `transaction`  SET `status`='0' WHERE `tranID` =".$tranID;
       
            $request=mysqli_query($conn," UPDATE `transaction` SET `status`='0' WHERE `tranID`=".$tranID);
            // echo " UPDATE `transaction` SET `status`='0' WHERE `tranID`=".$tranID;  exit();
            if($request)
            {
                header("location:../admin/thongke.php") ;
            }
        }
        

    // }
?>

<!-- <a href="../admin/thongke.php"></a> -->