<!DOCTYPE html>
<html>
<head>
	<title>TABLEAU</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
        $pays=array(
        	        "France" => "Paris",
                    "Allemagne" => "Berlin",
                    "Italie" => "Rome"       
        );
        foreach ($pays as $key => $diwane) {
           	   echo "<strong>" .$diwane."</strong>" ." ". "est capitale  de:" ." "."<strong>" .$key."</strong>"."<br>";
           	     
           	   
           }   

     ?>



</body>
</html>