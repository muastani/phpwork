<?php

   include "config.php";

   $user = $_POST['username'];
   $pass = $_POST['password'];

   $com_sql = "SELECT * FROM account WHERE user_acc = $user AND pass_acc = $pass";
   $com_query = mysqli_query($conn, $com_sql);
   $com_result = mysqli_fetch_array($com_query);

   if(!$com_result){
    echo "ไม่สามารถ Sign-in ได้ เนื่องจาก ID student หรือ Password ไม่ถูกต้อง";
    header("refresh: 2; url=login.html");
   }else{
    echo "ยินดีต้อนรับ เข้าสู่ระบบ Student system";
    header("refresh: 2; url=home.php");
   }
   mysqli_close($conn);

?>