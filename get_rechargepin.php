<?php
require_once 'database.php';
for($i=0;$i<=20;$i++){
$query="SELECT * FROM recharge_pin Where ID='$i'";
$respone =mysqli_query($link,$query);
if($result =mysqli_fetch_array($respone)){
echo $result['RECHARGE_PIN']."\t\t\t";
  }
}
 require_once 'database_close.php';
    ?>