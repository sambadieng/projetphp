<!DOCTYPE html>
<html>
<head>
	<title>MULTIPLICATION</title>
	<meta charset="utf-8">
</head>
<body>
        <h2>TABLE DE MULTIPLICATION 5</h2>
        <?php

        $table=5;
           for ($i=1; $i <=12 ; $i++) { 
           	     $resultat=  $table*$i;
           	     echo $table.' '."*".' '.$i."=".    $resultat."<br>";
           }



        ?>
</body>
</html>