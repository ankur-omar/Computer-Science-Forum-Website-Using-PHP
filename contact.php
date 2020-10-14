<?php
$showalert =false;
 include 'partials/dbconnect.php';
 if($_SERVER["REQUEST_METHOD"]=="POST"){
   $username =$_POST['name'];
   $useremail =$_POST['email'];
   $number = $_POST['phone'];
   $content = $_POST['subject'];

  
    
   
  

 $sql = "INSERT INTO `contact` (`name`, `email`, `Phone Number`, `Describe_content`) VALUES ('$username', '$useremail', '$number', '$content')";
 $result =mysqli_query($conn,$sql);


 if($result=true){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Successfully Added!</strong> Your Contact details is added. please wait to respond.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';

 }
 }



?>


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
    .container {
        min height: 90vh;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .column,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
    </style>
</head>

<body>

 
<?php include 'partials/header.php'; ?>





    <div class="container my-3 ">
        <div style="text-align:center">
            <h2>Contact Us</h2>
        </div>

        <div class="row mr-3">

            <div class="column">
                <form action="/Forum/contact.php" method ="post">
                <div class="form-group">
                        <label for="name"><b>Your Name</b></label>
                        <input type="name" class="form-control" id="name" placeholder="Enter your Name" name="name">
                </div>

                <div class="form-group">
                        <label for="email"><b>Your Email</b></label>
                        <input type="email" class="form-control" id="cemail" placeholder="Enter your Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="phone"><b>Your Phone Number (With Your Country Code)</b></label>
                        <input type="phone number" class="form-control" id="phone" placeholder="Enter your Phone Number" name="phone">
                    </div>


                    <label for="subject"><b>Describe What you want to contact me for here</b></label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:170px"></textarea>

                        <div class="form-group">
           
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    </div>

    <?php include 'partials/footer.php'; ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>