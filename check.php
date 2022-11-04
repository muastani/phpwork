<?php

    $prefix = $_GET['prefix'];

    // if($prefix == 'นาย'){
    //     echo "ผู้ชาย";
    // }elseif($prefix == 'เด็กชาย'){
    //     echo "ผู้ชาย";
    // }elseif($prefix == 'นาง'){
    //     echo "ผู้หญิง";
    // }elseif($prefix == 'นางสาว'){
    //     echo "ผู้หญิง";
    // }else{
    //     echo "ผู้หญิง";
    // }

    switch ($prefix) {
        case 'นาง':
            echo "ผู้หญิง";
            break;
        case 'นาง':
             echo "ผู้หญิง";
            break;
        case 'นางสาว':
            echo "ผู้หญิง";
            break;
        case 'เด็กหญิง':
            echo "ผู้หญิง";
            break;
        case 'นาย':
            echo "ผู้ชาย";
            break;
        default:
            echo "ผู้ชาย";
            break;
    }



?>