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
 $data[0]=$temp;


 $question=$result['QUESTION'];
 $temp=[
    'name'=>$question
    ];
    $data[1]=$temp;
 $subject=$result['SUBJECT_T'];
 $temp=[
    'name'=>$subject
    ];
    $data[2]=$temp;
 $opt1=$result['OPTION1'];
 $temp=[
    'name'=>$opt1
    ];
    $data[3]=$temp;
 $opt2=$result['OPTION2'];
 $temp=[
    'name'=>$opt2
    ];
    $data[4]=$temp;
 $opt3=$result['OPTION3'];
 $temp=[
    'name'=>$opt3
    ];
    $data[5]=$temp;
 $opt4=$result['OPTION4'];
 $temp=[
    'name'=>$opt4
    ];
    $data[6]=$temp;
 $answer=$result['CORRECT_ANS'];
 $temp=[
    'name'=>$answer
    ];
    $data[7]=$temp;
   
    $query="SELECT count(*) TotalCount FROM  question";
    $respone=mysqli_query($link,$query);
    if($result=mysqli_fetch_array($respone)){
    
    $id_limit= $result[0];
    $temp=[
       'name'=>$id_limit
       ];
       $data[8]=$temp;
     
    }
  
}
else{
   
$query="SELECT count(*) TotalCount FROM  question";
$respone=mysqli_query($link,$query);
if($result=mysqli_fetch_array($respone)){

$id_limit= $result[0];
$temp=[
   'name'=>$id_limit
   ];
   $data[8]=$temp;
  
 if($Question_id>$id_limit){
     echo "Submit";
 }
 else{
    echo "next";
 }
 
}

}
echo json_encode($data);



require_once 'database_close.php';
?>