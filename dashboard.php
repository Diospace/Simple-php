<?php
require_once 'database.php';
$query="SELECT * FROM student";
$data=array();

$respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
    $row=mysqli_num_rows($respone);
    for($i=0; $i<= $row; $i++){
        $query="SELECT * FROM student WHERE ID='$i'";
        $respone =mysqli_query($link,$query);
        if($result =mysqli_fetch_array($respone)){
            $temp=[
                'name'=>$result['FIRST_NAME']." ".$result['LAST_NAME']
                ];
                array_push($data,$temp);
              
               
        }
    }
    echo json_encode($data);
}
else{
    echo 'fail';
}
require_once 'database_close.php';

?>