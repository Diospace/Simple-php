<?php
require_once 'database.php';
$query="SELECT * FROM recharge_pin";
$respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
echo $result['RECHARGE_PIN'];
  
}
else {
  echo "fail";
}
 require_once 'database_close.php';
    ?>