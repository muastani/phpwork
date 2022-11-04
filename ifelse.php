<?php
    
    $score = 16;

   if($score % 2 == 0){
    echo "เลขคู่";
   }
   echo "<hr color='red'>";
   if($score % 2 == 0){
    echo "เลขคู่่";
   }else{
    echo "เลขคี่";
   }
   echo "<hr color='red'>";

   $led = "red";

   if($led == 'red'){
    echo "STOP!!!";
   }elseif($led == 'yellow'){
   echo "SLOWLY!!!";
   }else{
    echo "GOING";
   }

?>