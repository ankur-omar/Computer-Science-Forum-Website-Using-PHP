<?php
$showError ="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $email =$_POST['loginEmail'];
    $pass =$_POST['loginpass'];

    $sql ="select* from usertable where user_name ='$email'";

    $result =mysqli_query($conn,$sql);
    $numrows =mysqli_num_rows($result);
    if($numrows==1){
    $row =mysqli_fetch_assoc($result);
    if(password_verify($pass,$row['user_pass'])){
        session_start();
        $_SESSION['loggedin'] =true;
        $_SESSION['user_id'] =$row['user_id'];
        $_SESSION['useremail'] =$email;
        echo "Logged in" . $email;

       


    }
    header("Location:/Forum/index.php");
    
    }
    header("Location:/Forum/index.php");
}
?>