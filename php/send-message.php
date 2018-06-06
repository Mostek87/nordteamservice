<?php

require "PHPMailer/PHPMailerAutoload.php";

 function SendEMailByPHPMailer($Subject, $Message)
 {
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "artekpuck@gmail.com";
	$mail->Password = "schmutzfaust";
	$mail->SetFrom("artekpuck@gmail.com","Użytkownik strony");
	$mail->Subject = $Subject;
	$mail->Body = $Message;
	$mail->AddAddress("cybertron2030@gmail.com");

  
    if(!$mail->send())
    {
	   return false;
    }
    else
   {
	 return true;  
   }
 }

 function CheckPresenceOfRequiredData()
 {
    $RequiredData = array();
	$PresenceOfRequiredUserInformation = false;
	$Trimmed;
	
	   if(!empty($_POST['message']))
	   {
		   $Trimmed = trim($_POST['message']);
		 
		   if($Trimmed != false)
		   {
		    $RequiredData['message'] = $Trimmed."<br/><br/>";
		   }
	   }
	   else
	   {
		  return false;
	   }
	   
	   
	   if(!empty($_POST['anti-spam-answear']))
	   {
		   $Trimmed = trim($_POST['anti-spam-answear']);
		 
		   if($Trimmed != false)
		   {
		    $RequiredData['anti-spam-answear'] = strtolower(mb_convert_encoding($Trimmed,"UTF-8"));
		   }
	   }
	   else
	   {
		  return false;
	   }
	   
	   if(!empty($_POST['user-telephone-number']))
	   {
		   $Trimmed = trim($_POST['user-telephone-number']);
		 
		   if($Trimmed != false)
		   {
		    $RequiredData['message'] .= "Numer telefonu : ".$Trimmed."<br/>";
		   }
	   }
	   
	   if(!empty($_POST['user-e-mail-in-message']))
	   {
		   $Trimmed = trim($_POST['user-e-mail-in-message']);
		 
		   if($Trimmed != false)
		   {
		    $RequiredData['message'] .= 'Adres email : <a href ="mailto:'.$Trimmed.'">'.$Trimmed.'</a>';
		   }
	   }
	   
	   
	    if(!empty($_POST['message-subject']))
	   {
		   $Trimmed = trim($_POST['message-subject']);
		 
		   if($Trimmed != false)
		   {
		    $RequiredData['message-subject'] = $Trimmed;
		   }
		   else
	      {
		    $RequiredData['message-subject'] = "brak tematu";
	      }
	   }
	   else
	   {
		 $RequiredData['message-subject'] = "brak tematu";
	   }
    
      return $RequiredData;	
 }
 
function SpamFilter($Answear)
{
 	session_start();
	  
	  $CorrectAnswear = mb_convert_encoding($_SESSION['answear'],"UTF-8");  
	  $TimePassed = time() - $_SESSION['form-start-time'];  
	  
	  $_SESSION['form-start-time'] = time();   
	  $_SESSION['answear'] = "xA789xxzznM";
	  
	  return (($Answear == $CorrectAnswear)&&($TimePassed > 20));
	  
}
 
   
   $Raport = "";
   $Info = "";
   $ValidationData = CheckPresenceOfRequiredData();
   $Subject = $ValidationData['message-subject'];
   $Message = $ValidationData['message'];
   $UserAnswear = $ValidationData['anti-spam-answear'];
   
   
   if($ValidationData != false)   
   {
	  
	  if(SpamFilter($UserAnswear))  
	  {
      	  
						if(SendEMailByPHPMailer($Subject,$Message)) 
						{
						   $Raport = "Wiadomość wysłana"; 
						   $Info = "Dziękujemy za wysłanie wiadomości. W miarę możliwości postaramy się odpowiedzieć jak najszybciej wykorzystując podane przez Pana/Panią namiary.";
						}
						else 
						{
						   $Raport = "Błąd podczas wysyłania";
						   $Info = "Wprowadzone dane są poprawne, jednak coś poszło nie tak podczas wysyłania wiadomości. Prosimy poczekać i spróbować ponownie za jakiś czas.";
						}	
						
	  }
	  else
	  {
	   	$Raport = "Zatrzymano wysyłanie wiadomości";
        $Info = "Filtr antyspamowy zatrzymał wysyłanie. Odpowiedź na pytanie kontrolne była niepoprawna lub też wiadomość została wysłana szybciej niż 20 sekund po pojawieniu się formularza. Niestety takie zabezpieczenia są konieczne ze względu na roboty grasujące w sieci rozsyłające spam. Za utrudnienia przepraszamy.";		
	  }
				          			   
   }
   else 
   {
	 $Raport = "Wiadomość nie została wysłana";
	 $Info = "Wprowadzono niepoprawne dane. Należy podać prawidłową odpowiedź na pytanie kontrolne i treść wiadomości";
   }
       
   
   ?>
