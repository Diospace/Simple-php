<?php
require_once 'database.php';

$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM student WHERE EMAIL='$email' and PASSW='$password'";
$respone =mysqli_query($link,$query);


if($result =mysqli_fetch_array($respone)){
    echo "Data Matched";
    }
    else{
    echo "Invalid Username or Password Please Try Again";
    }  


require_once 'database_close.php';

?>