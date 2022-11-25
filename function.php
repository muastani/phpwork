<?php

    function displayName(){
        echo "Muas Bakrirangsan";
    }
    echo "My Name is ";
    displayName();

    echo "<hr color=red>";

    function addNumber($num1,$num2){
        echo $num1 + $num2;
    }
    addNumber(1,2);

    echo "<hr color=green>";

    function displayStudent($name){
        echo "$name";
    }
   
    displayStudent("Muas");

    echo "<hr color=blue>";

    function powernumber($num,$pow){
        echo $num ** $pow; //ยกกำลัง
    }
   
    powernumber(10,5);

    echo "<hr color=blue>";

    function fractionnumber($numrate,$denomerate){
        echo $numrate % $denomerate; //เศษส่วน
    }
   
    fractionnumber(17,9);



?>