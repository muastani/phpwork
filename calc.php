<?php
  $r=$_POST['r'];
  $area=22/7*$r*$r;
 
 
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่วงกลม</title>
  </head>
  <body>
  <br>
  <p style='color:red'>
  <?php
  echo "ค่ารัศมี เท่ากับ ".$r. "<br>";
  ?>
</p>
<p style='color:green'>
  <?php
  echo "ขนาดพื้นที่รูปวงกลม = ".$area;
  ?>
</p>

  </body>
  </html>