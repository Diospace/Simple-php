<?php
require_once ('database.php');
function random_word($id = 15){
		$pool = '1234567890!@#$%^&*~`ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
    }
  
   
   for($i=0;$i<=20;$i++){
    $pin=random_word();
       $query="INSERT INTO recharge_pin(ID,RECHARGE_PIN) VALUES ('$i','$pin')";
  if($result= mysqli_query($link,$query)){
       echo "$i"." "."$pin".""."<br>";
  }
  else{
    echo "sorry not created, there is still recharger pins in your database <br>";
  }
}

 require_once 'database_close.php';
    ?>
