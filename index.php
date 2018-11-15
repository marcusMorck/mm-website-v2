<?php
 $request = $_SERVER['REDIRECT-URL'];

 switch ($request) {
     case '':
         require __DIR__ . 'header.php';
         break;
    case '/':
        require __DIR__ . 'header.php';
        break;
     
     default:
         # code...
         break;
 }



?>