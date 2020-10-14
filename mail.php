<?php
include 'partials/dbconnect.php';
include '/Forum/contact.php';
ini_set("sendmail_from","ankurkumaromar@gmail.com");
$to =$useremail;
$subject ="Your information have been received by Smart Forum"
$message =$content;

$header ="From:ankurkumaromar@gmail.com \r\n";

$result =mail($to,$subject,$message,$header);

if($result==true){
    echo "Message sent successfully";

}

else{
    echo "unable to send mail";
}

?>