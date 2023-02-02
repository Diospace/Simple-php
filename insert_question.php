<?php
require_once 'database.php';


$questNum = $_POST['id'];
$quest = $_POST['question'];
$ans = $_POST['answer'];
$op1 =$_POST['option1'];
$op2 = $_POST['option2'];
$op3 =$_POST['option3'];
$op4 = $_POST['option4'];
$desc = $_POST['des'];
$subject = $_POST['subject'];
$coundowm = $_POST['time'];


$query = "INSERT INTO question(QUESTION_NUMBER, SUBJECT_T, QUESTION, OPTION1, OPTION2, OPTION3, OPTION4, CORRECT_ANS, DESCRIPTION_T,COUNT_DOWN) VALUES ('$questNum','$subject', '$quest', '$op1', '$op2', '$op3', '$op4', '$ans','$desc' ,'$coundowm')";
if($result=mysqli_query($link, $query)){
	echo true;
}
else{
	echo false;
}

require_once 'database_close.php';
?>