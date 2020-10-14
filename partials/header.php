<html>

<head>
    <link rel="stylesheet" href="style.css">




    <?php
session_start();
include 'dbconnect.php';


echo ' <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="index.php">Smart Forum</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Forum/about.php">About Us</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    $sql = "SELECT category_name,category_id FROM `categories` LIMIT 10";
     $result =mysqli_query($conn,$sql);

     while($row=mysqli_fetch_assoc($result)){
     echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>';

     }

       
        
 echo ' </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Forum/contact.php" tabindex="-1">Contact Me</a>
    </li>
  </ul>
  <div class="row mx-2">';

  if(isset($_SESSION['loggedin']) && $_SESSION==true){
   echo  '<form class="form-inline my-2 my-lg-0" action ="/Forum/search.php" method ="get">
    <input class="form-control mr-sm-2" name ="search"  type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
  <img src="/Forum/img/userlogo2.png" width="54px" class="ml-3" alt="">
   <p class ="text-light mx-3 my-0"> Welcome '. $_SESSION['useremail'] .'</p> 
   <a href ="partials/logout.php" class ="btn btn-outline-success ml-2" >LogOut</a>
   </form>';
  }

  else{
    echo '<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" name ="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <button class ="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
  <button class ="btn btn-outline-success mx-2" data-toggle="modal" data-target="#SignupModal">Sign Up</button>';
  }
  


  echo '</div>
  
</div>
</nav>';

include 'partials/loginModal.php';
include 'partials/SignupModal.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>SignUp done Successfully!</strong> You should go for Login Now.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

 

?>
</head>

</html>