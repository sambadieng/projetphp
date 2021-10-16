<!DOCTYPE html>
<html>
<head>
	<title>FONCTION RAND</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
        $tab=array();
          for ($i=0; $i <10 ; $i++) { 
          	$tab[$i]=rand(40,50);
          	}
          
          foreach ($tab as $cle => $tableau) {

          	     if ($tableau ==42) {
          	          	echo "Bonsoir les amis";
          		      break;
          	      }
          	      else{
          		        echo "";
          		
          	}
          	
          }
          var_dump( $tab);
	?>

</body>
</html>