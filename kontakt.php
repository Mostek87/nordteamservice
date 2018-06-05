<?php include "php/anti-spam.php"; ?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Kontakt z firmą Nord Team Service</title>
  <meta name="author" content="Cybertron">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Description" content="Dane kontaktowe firmy Nord Team Service">
  <link href='http://fonts.googleapis.com/css?family=Athiti|Archivo+Narrow|Jura&subset=latin,latin-ext' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/contact.css">
</head>  
<body>

 <nav class="menu">
    <ul class="list-horizontal navigation-list">
	  <li class="logo-item-list"><a href="index.html"><img class="nord-team-logo" src="/img/logo.jpg" alt="strona główna firmy Nord Team Service"/></a></li>
	  <li  class="navigation-item"><a class="navigation-item-link" href="index.html">firma</a></li>
	  <li class="navigation-item"><a class="navigation-item-link" href="aktualnosci.php">aktualności</a></li>
	  <li class="navigation-item"><a class="navigation-item-link" href="serwis.html">serwis</a></li>
	  <li class="navigation-item"><a class="navigation-item-link active" href="kontakt.php">kontakt</a></li>
    </ul>	
</nav>
 
 <div class="contact-background">Kontakt</div>
   
 <dl class="contact-data-list">
   <dd class="contact-data-element decoration"><span class="fa fa-envelope" aria-hidden="true"></span>         </dd>  <dt class="contact-data-element"><a class="e-mail-adress" href="mailto:nordteamservice@interia.pl">nordteamservice@interia.pl</a></dt>
   <dd class="contact-data-element decoration"><span class="fa fa-mobile phone-icon" aria-hidden="true"></span></dd>  <dt class="contact-data-element"><a class="phone-numbers" href="tel:+48-880-738-284">+48-880-738-284</a></dt>
   <dd class="contact-data-element decoration"><span class="fa fa-mobile phone-icon" aria-hidden="true"></span></dd>  <dt class="contact-data-element"><a class="phone-numbers" href="tel:+48-880-982-392">+48-880-982-392</a></dt>
 </dl>
   
<div class="form-with-description">

	<div class="form-description">
	  Formularz kontaktowy
	  <div class="required-field-information">Wymagana jest jedynie treść i odpowiedź na pytanie antyspamowe</div>
	</div>
	
 <form class="nord-team-contact-form" action="wiadomosc.php"  method="POST" id="contact-form">
  <div class="contact-data-container">
  
	<div class="contact-data-cell">
	    <label class="contact-form-label" for="user-e-mail-in-message">E-mail</label>
	    <input id="user-e-mail-in-message" maxlength="30"  class="user-contact-data user-input" type="email"  name="user-e-mail-in-message"/>
	</div>
	
	     <div class="contact-data-cell">
		   <label class="contact-form-label" for="user-telephone">Nr. telefonu</label>
		   <input id="user-telephone" class="user-contact-data user-input" type="tel" maxlength="20"  name="user-telephone-number"/>
		 </div>
  </div>
		 <label class="contact-form-label" for="subject">Temat(max 40 znaków)</label>
		 <input id="subject" type="text" maxlength="40" class="user-input subject-of-message" name="message-subject" >
		 <label class="contact-form-label" for="subject">Treść</label>
	     <textarea id="message" class="user-input text-of-message" required  name="message"></textarea>
		 
	 <div class="anti-spam-control">
	  Kontrola antyspamowa. Odpowiedz na następujące pytanie : <?php echo $Question; ?>?
	 </div>
	 
	 <div>
	    <label class="contact-form-label" for="subject">Odpowiedź</label>
		 <input id="answear" type="text" class="user-input anti-spam-answear" required name="anti-spam-answear" >
	 </div>
	 
	  <div class="form-buttons">
		 <input id="send-message-button" class="contact-form-button" type="submit" value="wyślij"/>
		 <input class="contact-form-button reset-button floated" type="reset" value="resetuj"/>
	  </div>
	</form>
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
     Wszystkie prawa zastrzeżone © Nord Team Service 2018
   </div>
   
   <div class="designer-information">
     Witryna stworzona przez : <a target="_blank" class="link-to-designer" href="http://www.mostart.pl">Cybertron</a>
   </div>
</footer>

  
  
</body>
</html>