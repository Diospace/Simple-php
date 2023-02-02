  <?php
  require_once 'database.php';
$query="SELECT count(*) TotalCount FROM  question";
$respone=mysqli_query($link,$query);
if($result=mysqli_fetch_array($respone)){
$id_limit= $result[0];
$idpin=$id_limit+0;
for($i=1;$i<=$idpin;$i++){
    $query="DELETE   FROM question WHERE QUESTION_NUMBER='$i'";
    if($result= mysqli_query($link,$query)){
     echo "start";
    }
    else{
        echo "Sorry the question in datebase have not be deleted";
    }
}
  
}
else{
}
require_once 'database_close.php';
?>