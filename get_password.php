<?php
require_once ('database.php');


$email=$_POST['email_s'];
$phone=$_POST['phone_number'];

$query="SELECT * FROM student WHERE EMAIL='$email' or CONTACT_TEL='$phone'";
$respone =@mysqli_query($link,$query);


if($result=mysqli_fetch_array ($respone)){ 

    echo $result['PASSW'];
 }
   else{
    echo "NO EMAIL OF PHONE NUMBER PLEASE CREATE ACCOUNT";
} 
require_once('database_close.php');

?>