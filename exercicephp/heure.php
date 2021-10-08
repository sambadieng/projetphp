<!DOCTYPE html>
<html>
<head>
	<title>HEURE</title>
	<meta charset="utf-8">
</head>
<body>
           <h2>Condition qui affiche si l'heure est le matin l'apres midi ou la nuit</h2>
           <?php
              $heure=23;
              if (0<=$heure &&$heure<12) {
              	echo "C'est le matin";
              }
              elseif (12<=$heure && $heure<=18) {
              	echo "C'est l'apres midi";
              } 
              elseif(18<$heure && $heure<=24){
              	echo "C'est la nuit";
              }
              else{
              	echo "L'heure doit etre comprise entre 0 et 24";
              }
           ?>

</body>
</html>