<?php

   $file1 = fopen('muas.txt','r') or die("ไม่พบไฟล์ที่ต้องการ");

   echo fread($file1,filesize('muas.txt'));

   fclose($file1 );

?>