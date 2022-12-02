
<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];
$num5 = $_GET['num5'];
$num6 = $_GET['num6'];
$num7 = $_GET['num7'];
$num8 = $_GET['num8'];
$num9 = $_GET['num9'];
$num10 = $_GET['num10'];
$num11 = $_GET['num11'];
$num12 = $_GET['num12'];
$pro = $_GET['pro'];


$number = array(
    'num1'=> $num1,
    'num2'=> $num2,
    'num3'=> $num3,
    'num4'=> $num4,
    'num5'=> $num5,
    'num6'=> $num6,
    'num7'=> $num7,
    'num8'=> $num8,
    'num9'=> $num9,
    'num10'=> $num10,
    'num11'=> $num11,
    'num12'=> $num12
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #89ffff;">
<center><br><br><br><br><br><br><br>
<h3>
<?php
    
    echo "<table>";
    switch ($pro) {
        case 'จำนวนข้อมูล':
            echo "<h1>"."จำนวนข้อมูล ".count($number)." ชุด "."</h1>";
          
            
            break;
        
        default:
        foreach($number as $kstd => $vstd){
            echo "<h4>"." key ($kstd) "."=>"." ($vstd) "."</h4>";
         }
            break;
    }
       
?></h3>
</center>
</body>
</html>
