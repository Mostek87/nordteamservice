<?php
   include "php/send-message.php";
 ?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Status wysłanej wiadomości</title>
  <meta charset="utf-8">
  <meta name="author" content="Cybertron">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Description" content="Dane kontaktowe firmy Nord Team Service">
  <link rel="stylesheet" href="/css/message.css">
  <link href='http://fonts.googleapis.com/css?family=Jura|Athiti&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
   
   <div class="background-image">
     <div class="message-status"><?php echo $Raport;?></div>
   </div>
   
   <div class="info">
     <?php echo $Info; ?>
	  <div class="link-container"> 
        <a class="link-to-main-page"  href="index.html">Strona główna</a>
      </div>
   </div 
 </body>
 </html>
