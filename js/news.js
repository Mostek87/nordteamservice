$(document).ready(function()
{
	  $(".gallery-show-hide").click(function()
	  {
		var ID = $(this).attr("id");
		var GalleryId = "#gallery_" + ID;
		var ActivationButtonId = "switch_gallery_" + ID;
		
        
          if($(GalleryId).css("height") == "0px")
		  {
		    $(GalleryId).css({"overflow" : "visible", "margin" : "15px auto"});
			$(GalleryId).animate({height: "520px"},1000, function()
				{
				  var ActivationButtonPosition = parseInt(document.getElementById(ActivationButtonId).getBoundingClientRect().top);
				  var CorrectionalValue = (window.innerWidth > 624) ? 77 : 35;
				  
                  window.scrollBy(0,ActivationButtonPosition - CorrectionalValue);				  
				});
			$("#" + ActivationButtonId).html("<< Schowaj >>");
			
		  }
         else
		 {
			$(GalleryId).css({"overflow" : "hidden", "margin" : "0 auto"});
			$(GalleryId).animate({height: "0px"},1000);
            $("#" + ActivationButtonId).html("<< Galeria >>");			
		 }
		 
	   
		 	

            			
	  });  
	  
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