<?php
 require_once ('database.php');
  $Full_name=$_POST['full_name'];
  
    $current_data=date("j ",time());
    $curent_month= date('m');
    $month='';
    $data='';

    $query="SELECT * FROM payment WHERE FIRST_NAME='$Full_name'";
    $respone =mysqli_query($link,$query);
    if($result=mysqli_fetch_array($respone)){
   $date=$result['DATE'];
   $month=$result['MONTH'];
   $lastdayOfmonth=$result['LAST_DAY_MONTH'];
   $date_check=$date+6;
   $monthPlusOne=$month+1;
   $Dec=12;
   $jan=01;
   $dat=$date+0;
   $curr_date=(int)$current_data;
   $New_day=$lastdayOfmonth-$dat+$curr_date;
  
   if($month==$curent_month){
      if($date_check>=$current_data){
        echo "your subscription is still on";
     }
      else{
        echo "Sorry  subscribe"." ".$Full_name;
       }
    }
    elseif($monthPlusOne==$curent_month){
      if($New_day<=7){
      echo "your subscription is still on";
      }
      else{
        echo "Sorry  subscribe"." ".$Full_name;
       }
    }
    elseif($month==$Dec && $curent_month==$jan){
      if($New_day<=7){
        echo "your subscription is still on";
        }
        else{
          echo "Sorry  subscribe"." ".$Full_name;
         }
    }
  
    }
    else{
      echo "Please ".$Full_name. " "."Subscribe";
        }  
  
    
    require_once ('database_close.php');

?>