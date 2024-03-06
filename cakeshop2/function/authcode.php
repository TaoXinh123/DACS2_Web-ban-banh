<?php 
session_start();
    include('../admin/config/dbcon.php');

    if(isset($_POST['register_btn'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    
        $check_email_query = "SELECT email FROM user WHERE email='$email'";
        $check_email_query_run = mysqli_query($conn, $check_email_query);
        if(mysqli_num_rows($check_email_query_run)>0){
            $_SESSION['message'] = "Email already register ";
            header('location:../adregister.php');
        }else{

        

        if($password == $cpassword){
            $insert_query = "INSERT INTO user (name, email, phone, password) VALUE ('$name','$email', '$phone', '$password')";
            $insert_query_run = mysqli_query($conn, $insert_query );

            if($insert_query_run){
                $_SESSION['message']= "Registered Successfully";
                header('location:adlogin.php');
            }
            else{
                $_SESSION['message']= "Something went wrong";
                header('location:adregister.php');
            }
        }
        else {
            $_SESSION['message'] = "Password do not match ";
            header('location:adregister.php');
        }
    }
}
else if(isset($_POST['login_btn'])){
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth']= true;
        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];

        $_SESSION['auth_user']= [
            
            'name'=>$username,
            'email'=> $useremail
        ];
            $_SESSION['message'] = "Login suscessfully";
            header('location: ../adminindex.php');
    }else{
        $_SESSION['message']= "Invalid credentials";
        header('location: ../adlogin.php');
    }
}
?>