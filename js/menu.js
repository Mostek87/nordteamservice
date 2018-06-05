$(document).ready(
    function()
	{
	
	  function ChangeTopMenuToStartState()
	  {
	    $(".top-contact").css("display","block");
	    $(".menu").css({"position":"static","border":"none"});
		$(".background-images-container").css("margin-top","0"); 
	  }
	  
	  function HideContactInfo()
	  {
	    $(".top-contact").css("display","none");
		$(".menu").css({"position" : "fixed","top":"0","width":"100%","border":"1px solid black","box-shadow":"0px 4px 2px black"});
		$(".background-images-container").css("margin-top","100px");
	  }
	
	  
	  $(window).scroll(function()
	  {	   
				  if(pageYOffset > 40)
				     HideContactInfo()
				  else ChangeTopMenuToStartState();   
	  });
	  
	  
    });