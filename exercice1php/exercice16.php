<!DOCTYPE html>
<html>
<head>
	<title>POPULATION</title>
	<meta charset="utf-8">
</head>
<body>
         <?php
               $pays_population=array(
                   'France'=>67595000,
                   'Suede'=>9998000,
                   'Suisse'=>8417000,
                   'Kosovo'=>1820631,
                   'Malte'=>434403,
                   'Mexique'=>122273500,
                   'Allemagne'=>82800000
                   );

                   foreach ($pays_population as $key => $makane) {
                       	if ($makane>=20000000) {
                       		echo $key."<br>";
                       	}
                       }    


         ?>
</body>
</html>