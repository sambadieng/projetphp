<!DOCTYPE html>
<html>
<head>
	<title>AGE</title>
	<meta charset="utf-8">
</head>
<body>
     <h2>Une condition pour tester si la personne est mineure ou majeure</h2>
     <?php
         $age=19;
         if ($age<18) {
         	echo "Vous etes mineure";
         }
         else{
         	echo "vous etes majeure";
         }
     ?>
</body>
</html>