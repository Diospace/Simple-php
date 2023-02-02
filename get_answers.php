<?php
require_once 'database.php';

$data=array();
$Question_id=$_POST['id'];
$query="SELECT * FROM question WHERE QUESTION_NUMBER='$Question_id'";
$respone=mysqli_query($link,$query);

if($result=mysqli_fetch_array($respone)){
  
 $question_number=$result['QUESTION_NUMBER'];
 $temp=[
 'name'=>$question_number
 ];
 array_push($data,$temp);

 $question=$result['QUESTION'];
 $temp=[
    'name'=>$question
    ];
    array_push($data,$temp);
 $answer=$result['CORRECT_ANS'];
 $temp=[
    'name'=>$answer
    ];
    array_push($data,$temp);
 $description=$result['DESCRIPTION_T'];
 $temp=[
    'name'=>$description
    ];
    array_push($data,$temp);  
}

else{
   
   $query="SELECT count(*) TotalCount FROM  question";
   $respone=mysqli_query($link,$query);
   if($result=mysqli_fetch_array($respone)){
   
   $id_limit= $result[0];
    if($Question_id>$id_limit){
        echo "Submit";
    }
    else{
       echo "tull";
    }
    
   }
   }
echo json_encode($data);
require_once 'database_close.php';
?>