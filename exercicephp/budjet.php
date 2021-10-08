<!DOCTYPE html>
<html>
<head>
	<title>BUDJET</title>
	<meta charset="utf-8">
</head>
<body>
         <h2>CALCUL DU BUDJET</h2>
         <?php
           $budjet="1553.89€";
           $achats="1554.76€";
           if ($budjet>=$achats) {
           	  echo "Le budjet permet de payer les achats";
           }
           else{
           	echo "le budjet ne permet pas de payer les achats ";
           }
         ?>




</body>
</html>