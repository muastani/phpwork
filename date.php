<?php

   echo date('d/m/Y'); // 16/12/2022  //วันที่ปัจจุบัน
   echo "<br>";
   echo date('H:i:s');     //  09:47:55
   echo "<br>";
   echo date('W');     //สัปดาที่เท่าไร
   echo "<br>";
   echo date('D,d F Y');
   echo "<br>";
   $ythai = date('Y') + 543;
   echo date('d F').$ythai;   //ปีไทย

?>