<?php
require_once 'database.php';
 $ImageName = $_POST['image_name'];
 $ImageData = $_POST['image_path'];

 $random = random_word(20);
 $path = "images/".$random.".jpg";
$real_name= $random.".jpg";

/*
$ServerURL = "https://androidjsonblog.000webhostapp.com/$ImagePath";*/
$ServerURL = "http://192.168.43.33/jamb/$path";

$InsertSQL = "INSERT INTO image_detail (IMAGE_NAME,IMAGE_REAL_NAME,IMAGE_PATH) VALUES ('$ImageName','$real_name','$ServerURL')";

if(mysqli_query($link, $InsertSQL)){

file_put_contents($path,base64_decode($ImageData));

echo "Your Image Has Been Uploaded";
}

else{
    echo "Not Uploaded";
    }

    function random_word($id = 20){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
	}
   
require_once 'database_close.php';
?>