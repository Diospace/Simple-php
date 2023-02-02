<?php
require_once 'database.php';
$data=array();
$email=$_POST['email'];

$query="SELECT * FROM student WHERE EMAIL='$email'";
$respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
         $image_name= $result['IMAGE_NAME'];
         $temp=[
          'name'=>$image_name
         ];
       $data[0]=$temp;
       $Full_name=$result['FIRST_NAME']." ".$result['LAST_NAME'];
       $temp=[
        'name'=> $Full_name
       ];
     $data[1]=$temp;
         
    $query="SELECT * FROM image_detail WHERE IMAGE_NAME='$image_name'";
    $respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
  $image_path= $result['IMAGE_REAL_NAME'];
  $temp=[
    'name'=>$image_path
   ];
   $data[2]=$temp;
    
}
$query="SELECT * FROM question";
$respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
$subject= $result['SUBJECT_T'];
$temp=[
  'name'=>$subject
 ];
 $data[3]=$temp;
}
$query="SELECT * FROM question";
$respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
$time= $result['COUNT_DOWN'];
$temp=[
  'name'=>$time
 ];
 $data[4]=$temp;

}
   
$query="SELECT count(*) TotalCount FROM  question";
$respone=mysqli_query($link,$query);
if($result=mysqli_fetch_array($respone)){

$id_limit= $result[0];
$temp=[
   'name'=>$id_limit
   ];
   $data[5]=$temp;
}

}
  
echo json_encode($data);
 
require_once 'database_close.php';
?>