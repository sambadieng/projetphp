<!DOCTYPE html>
<html>
<head>
	<title>CONDITION</title>
	<meta charset="utf-8">
</head>
<body>
     <h2>CONDITION QUI AFFICHE UN MESSAGE DIFFERENT EN FONCTION DE LA VALEUR DE LA VARIABLE</h2>

     <?php
        $sexe="masculin";
        if ($sexe=="masculin") {
        	echo "vous etes un homme";
        }
        elseif ($sexe=="feminin") {
        	echo "vous etes une femme";
        }
        else{
        	echo "vous etes une personne non declarée";
        }
     ?>
</body>
</html>