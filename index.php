<?php
 $request = $_SERVER['REDIRECT-URL'];

 switch ($request) {
     case '':
         require __DIR__ . '/header.php';
         require __DIR__ . '/hero-video.php';
         break;
    case '/':
        require __DIR__ . '/header.php';
        require __DIR__ . '/hero-video.php';
        break;
     
     default:
         # code...
         break;
 }



?>