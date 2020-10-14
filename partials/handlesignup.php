<?php
$showError ="false";
if($_SERVER["REQUEST_METHOD"]){
    include 'dbconnect.php';
    $user_name =$_POST['SignupEmail'];
    $user_email =$_POST['email'];
    $pass =$_POST['Signuppassword'];
    $cpass =$_POST['Signupcpassword'];

    
    $existSql ="select* from `usertable` where user_name ='$user_name'";
    $result =mysqli_query($conn,$existSql);
    $numrows =mysqli_num_rows($result);

    if($numrows>0){
        $showError ="User name and Email is already taken";

    }

    else{
        if($pass==$cpass){
            $hash =password_hash($pass,PASSWORD_DEFAULT);
            $sql ="INSERT INTO `usertable` ( `user_name`,`user_email`,`user_pass`) VALUES ( '$user_name','$user_email','$hash')";
            $result = mysqli_query($conn,$sql);
            if($result){
                $showAlert =true;
                header("Location:/Forum/index.php?signupsuccess=true");
            exit();
        }
    
        else{
            $showError ="Password does not match";
           
        }
    }
    }
    header("Location:/Forum/index.php?signupsuccess=false&error=$showError");
}
?>