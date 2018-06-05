<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Sklep Nord Team Service</title>
  <meta charset="utf-8">
  <meta name="author" content="Imperator">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Description" content="Sklep internetowy Nord Team Service">
  <link rel="stylesheet" href="/css/stopka.css">
  <link rel="stylesheet" href="/css/sklep.css">
  <link rel="stylesheet" href="/css/products.css">
   <link rel="stylesheet" href="/css/login-panel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Athiti|Archivo+Narrow&subset=latin,latin-ext' rel='stylesheet' >
</head>  
<body>
<div id="decoration-triangle" class="triangle"></div>

<div id="login-register-panel" class="control-panel">

<form method="POST">

  <div class="input-container">
     <label for="login-textfield" class="user-login-data-label">Login</label>
     <input type="text" id="login-textfield" class="user-login-data" required />
  </div>
  
  <div class="input-container"> 
	<label for="password-textfield" class="user-login-data-label">Hasło</label>
	<input type="password" id="password-textfield" class="user-login-data" required/>
  </div>
	<input type="submit" class="user-submit-login-data" value="zaloguj"/>

</form>
 <div class="separator"></div>
 
   <div class="information-for-users-without-account">
   Nie masz jeszcze konta? Kliknij w przycisk poniżej aby się zarejestrować.
   </div>
   
   <a href="rejestracja.php" class="register-button">Rejestracja</a>
   
</div>
 <ul class="top-contact list-horizontal">
    <li class="contact-data-top"><span class="top-icon fa fa-phone" aria-hidden="true"></span> +48-880-738-284</li>
	<li class="contact-data-top phone-right"><span class="top-icon fa fa-phone" aria-hidden="true"></span> +48-880-982-392</li>
	<li class="contact-data-top e-mail floated"><span class="top-icon fa fa-envelope" aria-hidden="true"></span>
	<a  class="e-mail-adress-link" href="mailto:nordteamservice@interia.pl">nordteamservice@interia.pl</a></li>
	<li id="show-hamburger" class="hamburger-set floated"><span id="action">ROZWIŃ</span><span class="fa fa-bars" aria-hidden="true"></span></li>
  </ul>

  <nav class="menu">
    <ul class="list-horizontal navigation-list">
      <li class="navigation-item"><a href="index.html"><img src="/img/logo.jpg" class="logo-nord-team" alt="logo firmy Nord team Service"/></a></li>
	  <li class="navigation-item">
	     <form class="search-form" method="GET" action="szukaj.php">
		    <input type="search" class="phrase-to-search">
			<input type="submit" class="submit-button" value="szukaj">
		 </form>
	  </li>
	  <li class="navigation-item floated"><a class="navigation-item-link" href="kontakt.php">KONTAKT</a></li>
	  <li class="navigation-item floated"><a class="navigation-item-link" href="aktualnosci.html">AKTUALNOŚCI</a></li>
	  <li class="navigation-item floated"><a class="navigation-item-link" href="serwis.html">SERWIS</a></li>
	  <li class="navigation-item floated"><a class="navigation-item-link active" href="sklep.php">SKLEP</a></li>
	  <li  class="navigation-item floated"><a class="navigation-item-link" href="index.html">FIRMA</a></li>
	  <li class="navigation-item floated"><span id="show-login-panel" class="navigation-item-link" >KONTO</span></li>
	  <div class="user-inputs-container">Koszyk(<span id="number-of-products-in-basket">0</span>)<span class="fa fa-shopping-basket" aria-hidden="true"></span></div>
    </ul>
	

 <div id="hamburger-list" class="navigation-hamburger">
 
 <a class="hamburger-layer-link" href="index.html">
   <div class="decoration-container"><img class="small-logo" src="/img/logo.jpg"/></div><div class="hamburger-text">Firma - o nas i naszych usługach</div>
 </a>
	  
 <a class="hamburger-layer-link" href="sklep.php">
   <div class="decoration-container hamburger-icon"><span class="fa fa-shopping-cart" aria-hidden="true"></span></div><div class="hamburger-text">Sklep - kup co potrzebujesz</div>
 </a>
 
 <a class="hamburger-layer-link" href="serwis.html">
   <div class="decoration-container hamburger-icon"><span class="fa fa-wrench" aria-hidden="true"></span></div><div class="hamburger-text">Serwis - zakres napraw i przeglądów</div>
 </a>
 
 <a class="hamburger-layer-link" href="aktualnosci.html">
   <div class="decoration-container hamburger-icon"><span class="fa fa-newspaper-o" aria-hidden="true"></span></div><div class="hamburger-text">Aktualności -  co nowego?</div>
 </a>
 
 <a class="hamburger-layer-link last-element" href="kontakt.php">
   <div class="decoration-container hamburger-icon"><span class="fa fa-volume-control-phone" aria-hidden="true"></span></div><div class="hamburger-text">Kontakt - porozmawiaj z nami</div>
 </a>

 </div>
	
</nav>

<div class="background-images-container">
Sklep
</div>

 <div class="whole-shop-container">
  <div class="categories layout-element">
             <div class="categories-header">KATEGORIE</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Analizatory spalin</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Automaty palnikowe</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Armatura olejowa</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Armatura gazowa</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Zamienniki do palników</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Dysze olejowe</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Palniki gazowe i olejowe</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Pompy olejowe</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Kotły</div>
			 <div class="categories-element"><span class="fa fa-caret-down" aria-hidden="true"></span>Narzędzia dla serwisantów</div>
  </div><div class="products layout-element">
    <div class="added-products-header">
	  Ostatnio dodane
	</div>

	<div class="flex-container">
	
		   <div class="product">
		      <div class="product-image"></div>
			    <div class="price-container" title="dodaj do koszyka"> 
			        <div class="product-price">5 123 PLN</div><div class="basket-image"><span class="fa fa-shopping-cart" aria-hidden="true" ></span></div></div>
			          <div class="product-description">Pompa Suntec TA 3 C 4010</div>
			   
		   </div>
		   
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
		   <div class="product"></div>
	</div>
  </div>
  
</div>


<footer class="NordTeamService-Footer">
 
    <div class="footer-separator">
      Odwiedź nas na  
	    <a class="facebook-link" target="_blank" href="https://www.facebook.com/NORD-TEAM-238591496164650/?fref=ts">
	     <span aria-hidden="true" class="fa fa-facebook-square"></span>
		 <span  class="visually-hidden"> facebook'u</span>
	   </a>
    </div>

   <div class="footer-separator">
     Zapisz się na newsletter aby otrzymywać newsy
	 
	 <form class="newsletter-form" method="POST">
	  <input class="user-email-newsletter" placeholder="e-mail" type="email" name="user-email"> <input class="submit-newsletter" type="submit" value="Zapisz się">
	 </form>
   </div>
   
   <div class="footer-separator">
     Wszystkie prawa zastrzeżone © Nord Team Service 2017
   </div>
   
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="/skrypty-js/obsluga-menu.js"></script>
  <script src="/skrypty-js/logowanie.js"></script>
</body>
</html>