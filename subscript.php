<?php
require_once 'database.php';
$pin=$_POST['pin'];
$name=$_POST['name'];
$current_day=date("j",time());
$current_month=Date('m');
$last_dayofMonth=date('t');
$query="DELETE   FROM payment WHERE FIRST_NAME='$name'";
if($result= mysqli_query($link,$query)){
$query="SELECT * FROM recharge_pin Where RECHARGE_PIN='$pin'";
$respone= mysqli_query($link,$query);

if($result =mysqli_fetch_array($respone)){
  $id=$result['ID'];
$query="DELETE   FROM recharge_pin WHERE recharge_pin.ID='$id'";
  if($result= mysqli_query($link,$query)){
  $query="INSERT INTO payment(FIRST_NAME,SUBSCRIPTION,DATE,LAST_DAY_MONTH,MONTH) value('$name','yes','$current_day','$last_dayofMonth','$current_month')";
     if($respone= mysqli_query($link,$query)){
       echo "Success";
}
  }
}
else{
  echo "fail";
}
}
else{
  $query="SELECT * FROM recharge_pin Where RECHARGE_PIN='$pin'";
$respone= mysqli_query($link,$query);

if($result =mysqli_fetch_array($respone)){
  $id=$result['ID'];
$query="DELETE   FROM recharge_pin WHERE recharge_pin.ID='$id'";
  if($result= mysqli_query($link,$query)){
  $query="INSERT INTO payment(FIRST_NAME,SUBSCRIPTION,DATE,LAST_DAY_MONTH,MONTH) value('$name','yes','$current_day','$last_dayofMonth','$current_month')";
	  
if($respone= mysqli_query($link,$query)){

	echo "Success";
}
  }
}
else{
  echo "fail";
}
}
  require_once 'database_close.php';
  ?>