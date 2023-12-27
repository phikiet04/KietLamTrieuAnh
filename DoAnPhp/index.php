<?php
 include "./views/inclues/header.php";
 switch ($_GET['act']){
    case 'about':
       include "./views/public/about.php";
       break;
    case 'register':
       include "./views/public/about.php";
       break;
    case 'login':
       include "./views/public/login.php";
       break;
    case 'shop':
       include "./views/public/shop.php";
       break;
    case 'detail':
       include "./views/public/detail.php";
       break;
    default:
       include "./views/public/home.php";   

 }

?>
