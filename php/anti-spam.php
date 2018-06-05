<?php

  $Questions = array(                                               //pytania kontrolne
    "Jak nazywa się drugi miesiąc roku",
	"Ile jest trzy razy cztery (tylko cyfry)",
	"Jak nazywa się stolica Polski",
	"Ile godzin ma doba (tylko cyfry)",
	"Na jakim kontynencie leży Polska",
	"Jaki kraj jest największy na świecie",
	"Ile dni ma tydzień (tylko cyfry)",
	"Jaki jest wynik działania zero plus 1 (tylko cyfry)",
	"Ile jest liter 'a' w wyrazie mama (tylko cyfry)",
	"Jak nazywa się popularny napój alkoholowy powstający z chmielu",
	"Jak nazywa się żółty owoc z afryki do obierania",
	"Jak powiemy na mamę swojej mamy",
	"Jak powiemy na tatę swojego taty",
	"W który dzień Grudnia obchodzimy boże narodzenie (tylko cyfry)",
	"Którego dnia Listopada obchodzimy święto niepodległości (tylko cyfry)",
	"Jak miał na imię autor Pana Tadeusza i Dziadów",
	"Jak nazywa się trzeci miesiąc roku",
	"Jak nazywa się państwo którym władał Julisz Cezar",
	"Ile jest samogłosek w słowie cebula (tylko cyfry)",
	"Jak nazywa się popularne okrągłe danie pochodzenia włoskiego",
	"Jak nazywa się drugi dzień tygodnia",
	"Ile jest dwa plus dwa(tylko cyfry)",
	"Ile jest samogłosek w słowie 'dom (tylko cyfry)'",
	"Ile jest liter w słowie kapusta (tylko cyfry)",
	"Ile jest cztery pomnożone przez cztery (tylko cyfry)",
	"Jaki aktualnie mamy rok (tylko cyfry)",
	"W którym wieku żyjemy (tylko cyfry)",
	"Czy Ziemia jest płaska (tak lub nie)",
	"Ile jest pięć razy 5 (tylko cyfry)",
	"Ile księżyców ma Ziemia (tylko cyfry)"
	
  );
  
  $Answears = array(   //odpowiedzi na pytania kontrolne
  "luty",
  "12",
  "warszawa",
  "24",
  "europa",
  "rosja",
  "7",
  "1",
  "2",
  "piwo",
  "banan",
  "babcia",
  "dziadek",
  "24",
  "11",
  "adam",
  "marzec",
  "rzym",
  "3",
  "pizza",
  "wtorek",
  "4",
  "1",
  "7",
  "16",
  date('Y'),
  "21",
  "nie",
  "25",
  "1"
  );
  
  $QuestionIndex = rand(0,29);               //przypisanie odpowiedzi do pytania kontrolnego do zmiennych sesji jak również czasu gdy formularz powstał
  $Question = $Questions[$QuestionIndex];
  session_start();
  
  $_SESSION['form-start-time'] = time();
  $_SESSION['answear'] = $Answears[$QuestionIndex];
  
?>