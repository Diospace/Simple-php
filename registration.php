<?php
  require_once 'database.php';
  //echo "Account aready exist";


  $username = $_POST['first_name'];
  $middleName= $_POST['middle_name'];
  $lastName= $_POST['last_name'];
  $email= $_POST['st_email'];
  $pass= $_POST['st_password'];
  $phoneContact= $_POST['phone_number'];
  $examType= $_POST['Exam_type'];
  $institution= $_POST['institution'];
  $imageName= $_POST['image_name'];
  $query="SELECT * FROM student WHERE  EMAIL='$email' and CONTACT_TEL='$phoneContact'";
  $respone =mysqli_query($link,$query);
  
  
  if($result =mysqli_fetch_array($respone)){
    echo "Account aready exist, change your email and password ";
      }
      else{
      
      
   
  $query="INSERT INTO student(FIRST_NAME,MIDDLE_NAME,LAST_NAME,EMAIL,PASSW,CONTACT_TEL,EXAM_TYPE,INSTITUTION,IMAGE_NAME) VALUES ('$username','$middleName','$lastName','$email','$pass','$phoneContact','$examType','$institution','$imageName')";

  if($result= mysqli_query($link,$query)){
    echo "Create Account Successfull";
  }
  else{
    echo "Create Account Fail";
  }
}


  require_once 'database_close.php';
?>