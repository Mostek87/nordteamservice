<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Aktualności, newsy Nord Team Service</title>
  <meta name="author" content="Cybertron">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Description" content="Nowości w Nord Team Service">
  <link rel="stylesheet" href="/css/news.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Jura|Athiti|Play|Archivo+Narrow&subset=latin,latin-ext' rel='stylesheet' >
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>  
<body>
<header>
  <dl class="top-contact list-horizontal">
    <dd class="contact-data-top"><span aria-hidden="true" class="top-icon fa fa-phone" ></span></dd>                  <dt class="contact-data-top"><a class="phone-number" href="tel:+48-880-738-284">+48-880-738-284</a></dt>
	<dd class="contact-data-top phone-right"><span aria-hidden="true" class="top-icon fa fa-phone" ></span></dd>      <dt class="contact-data-top phone-right"><a class="phone-number" href="tel:+48-880-982-392">+48-880-982-392</a></dt>
	<dd class="contact-data-top e-mail floated"><span aria-hidden="true" class="top-icon fa fa-envelope"></span></dd> <dt class="contact-data-top e-mail floated"><a  class="e-mail-adress-link" href="mailto:nordteamservice@interia.pl">nordteamservice@interia.pl</a></dt>
  </dl>

  <nav class="menu">
    <ul class="list-horizontal navigation-list">
	  <li class="logo-item-list"><a href="index.html"><img class="nord-team-logo" src="/img/logo.jpg" alt="strona główna firmy Nord Team Service"/></a></li>
	  <li  class="navigation-item"><a class="navigation-item-link" href="index.html">firma</a></li>
	  <li class="navigation-item"><a class="navigation-item-link active" href="aktualnosci.php">aktualności</a></li>
	  <li class="navigation-item"><a class="navigation-item-link" href="serwis.html">serwis</a></li>
	  <li class="navigation-item"><a class="navigation-item-link" href="kontakt.php">kontakt</a></li>
    </ul>	
</nav>
</header>
<main>

<h1 class="background-images-container">Aktualności</h1>

 <div class="background-color-container">  

 <?php require "php/get-news.php" ?> 
 


</div>

</main>

<footer class="NordTeamService-Footer">
 
    <div class="footer-separator">
      Odwiedź nas na  
	    <a class="facebook-link" target="_blank" href="https://www.facebook.com/NORD-TEAM-238591496164650/?fref=ts">
	     <span aria-hidden="true" class="fa fa-facebook-square"></span>
		 <span  class="visually-hidden"> facebook'u</span>
	   </a>
    </div>
   
   <div class="footer-separator">
     Wszystkie prawa zastrzeżone © Nord Team Service 2018
   </div>
   
   <div class="designer-information">
     Witryna stworzona przez : <a target="_blank" class="link-to-designer" href="http://www.mostart.pl">Cybertron</a>
   </div>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="/galleria/galleria-1.5.7.min.js"></script>
  <script src="/galleria/galleria.history.min.js"></script>
  <script src="/js/news.js"></script>

  

  <script>
    $(function() {
        // Load the classic theme
        Galleria.loadTheme('/galleria/themes/classic/galleria.classic.min.js');
        
		
		
        // Initialize Galleria
       <?php initiateGalerias($counter); ?>
    });
  </script>
</body>
</html>