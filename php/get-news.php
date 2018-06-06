<?php

function initiateGalerias(&$galeriasNumber)
{
	for($I = 1; $I < $galeriasNumber ; ++$I)
	{
	  	echo 'Galleria.run("#galleria_'.$I.'");';
	}
}

  $dataBase = mysqli_connect('mysql7.superhost.pl', 'sh218893_rocco', 'lekinapysk', 'sh218893_rocco');
	  
	    if(!$dataBase)
	    {
		  die("Błąd połączenia z bazą danych");
	    }
		
		mysqli_query($dataBase,"SET CHARSET utf8");
		
		$result = mysqli_query($dataBase, "SELECT * FROM news ORDER BY data DESC LIMIT 10");
		$counter = 1;
		
		while($row = mysqli_fetch_assoc($result))
		{
		  $date = $row['data'];
          $header = $row['naglowek'];
          $description = $row['opis'];
          $fileList = explode(",",$row['pliki']);

            echo '	<div class="news">
	   <time datetime="'.$date.'" class="date">'.$date.'</time>
       <h2 class="header">'.$header.'</h2>
	   <div class="separator"></div>
	      <div class="news-text">'.$description.'
	      </div>
		  
		  <div id="'.$counter.'" class="gallery-show-hide"><span id="switch_gallery_'.$counter.'" class="gallery-show-hide-text"><< Galeria >></span></div>
		  
		  <div id="gallery_'.$counter.'" class="content">';
		  echo '<div id="galleria_'.$counter.'" class="image_gallery">';
		  
		  foreach($fileList as $file)
		  {
			  
			
            echo '<a href="/img/aktualnosci/'.$file.'">
                <img title="realizacja usługi"
                     alt=""
                     src="img/aktualnosci/'.$file.'">
            </a>'; 
		  }
           
       echo' </div>

        
    </div>
    </div>
	
</div>';
++$counter;
		  
		}

?>