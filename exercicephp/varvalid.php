<!DOCTYPE html>
<html>
<head>
	<title>VARIABLEVALIDE</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
	     <?php
            $a="access";
                echo $a; //   $a est valide,s'affiche et commence par une lettre.
	      ?>
	</p>
	<p>
	     <?php
             $_a="code";
                  echo $_a; // $_a est valid,s'affiche et commence par une soulignée.
         ?>
    </p>
    <p>
    	<?php
              $a_a="school";
              echo $a_a ;   //  $a_a commence par une lettre suivi d'une soulignée,donc valide 
    	?>
    </p>
    <p>
    	<?php
         $AAA="estel";
         echo $AAA; // $AAA commence par une lettre suivie de plusieurs lettre donc vailde
    	?>
     </p>
    <p>
     	<?php
     //$a!="dakar";
     //	echo $a!;  // $a! est invalide à cause du point d'exclamation car la lettre a doit etre suivie par une lettre,chiffre ou underscore.
     	?>

     </p>
     <p>
     	<?php
       //    $1a="dev";
       //    echo $1a;  // $1a est invalide,en php la variable ne commence pas par un chiffre.
     	?>
     </p>
     <p>
     	<?php
            $a1="web";
            echo $a1;  // $a1 est valide ,la premiere lettre peut etre suivie par une lettre, un chiffre ou une soulignée.
     	?>

     </p>
</body>
</html>