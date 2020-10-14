<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Welcome To Smart Forum</title>
    <style>
    .jumbotron {
        background-color: black;
        color: green;

    }

    .lead {
        color: red;
    }
    #ques{
            min-height: 433px;
        }
    </style>
</head>

<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/header.php';?>


    <?php

if(isset($_GET['catid'])) {
  
  $id = $_GET['catid'];
  
  $sql ="SELECT * FROM `categories` WHERE category_id = $id";
 
  $result = mysqli_query($conn,$sql); 
  while($row = mysqli_fetch_assoc($result)){

 $c_name = $row['category_name'];
 $catdes = $row['category_description'];

  }
}

  
 ?>

    <?php
$alert =false;
 $method =$_SERVER['REQUEST_METHOD'];
 if($method=='POST'){
     $th_title =$_POST['title'];
     $th_desc =$_POST['desc'];
  
     $th_title = str_replace("<", "&lt;", $th_title);
        $th_title = str_replace(">", "&gt;", $th_title); 

        $th_desc = str_replace("<", "&lt;", $th_desc);
        $th_desc = str_replace(">", "&gt;", $th_desc);

     $user_id = $_POST['user_id']; 
     $sql ="INSERT INTO `thread` (`thread_title`, `thread_description`, `thread_user_id`, `thread_cat_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$user_id', '$id', current_timestamp())";
     $result = mysqli_query($conn,$sql); 
     $alert =true;
     if($alert){
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Successfully Added!</strong> Your Query is added. please wait for community to respond.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
     }
 }
 ?>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Welcome to <?php echo $c_name; ?> Forum</h1>
            <p class="lead"> <?php echo $catdes;  ?></p>
            <hr class="my-4">


        </div>
    </div>

    <?php


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

echo '<div class="container">
<h1 class ="py-2"> Ask a Question</h1>
<form action ="'. $_SERVER["REQUEST_URI"]. '" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"> Problem Title</label>
    <input type="text" class="form-control" id="title" name =title aria-describedby="titleHelp">
    <small id="emailHelp" class="form-text text-muted">Please Make Sure that  Keep your title crisp and short</small>
  </div>
  <input type="hidden" name="user_id" value="'. $_SESSION["user_id"]. '">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Elaborate Your Concern</label>
    <textarea class="form-control" id="desc" name ="desc" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>';
}
else{
    echo '<div class="container">
    <h1 class ="py-2"> Ask a Question</h1>
    <p class ="lead">You are not Logged in. Please Login to be start a Discussion</p>
    </div>';
}
?>




    <div class="container mb-5" id="ques">
        <h2 class="py-2"> Browse Questions</h2>

        <?php

$id = $_GET['catid'];
$sql ="SELECT * FROM `thread` WHERE thread_cat_id = $id";
 
$result = mysqli_query($conn,$sql);
$noresult =true;
while($row = mysqli_fetch_assoc($result)){
$noresult =false;
 $id = $row['thread_id'];
 $title = $row['thread_title'];
 $desc = $row['thread_description'];
 
 $thread_time =$row['timestamp'];
 $thread_user_id = $row['thread_user_id'];

 $sql2 ="SELECT user_name FROM `usertable` WHERE user_id =$thread_user_id";
 $result2 = mysqli_query($conn,$sql2);
 $row2 = mysqli_fetch_assoc($result2);
 

 
  echo '<div class="media my-3">
            <img src="img/userlogo.png
" width="54px" class="mr-3" alt="...">
<div class="media-body">'.
'<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">'. $title . ' </a></h5>
   '. $desc . ' </div>'.'<div class="font-weight-bold my-0"> Asked by: '. $row2['user_name'] . ' at '. $thread_time. '</div>'.
 
'</div>';
            
}


//echo var_dump($noresult); 
if($noresult){

    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container my-2">
      <h1 class="display-4 text-center">No Results Found</h1>
      <p class="lead text-center"><b>Be the first person to ask a Question</b>.</p>
    </div>
  </div>';

}


    ?>
    </div>


    <?php
 include 'partials/footer.php'; 
 ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>