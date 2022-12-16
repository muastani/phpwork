<?php

   $server = "localhost"; //127.0.0.1
   $user = "root";
   $pass = "";
   $db = "student";

   $conn = mysqli_connect($server,$user,$pass,$db);

   if(!$conn){
        echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้";
    }

?>