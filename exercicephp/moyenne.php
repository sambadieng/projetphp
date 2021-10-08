<!DOCTYPE html>
<html>
<head>
	<title>MOYENNE</title>
	<meta charset="utf-8">
</head>
<body>
        <p>CALCUL DE LA MOYENNE DES NOTES:</p>
        <?php
           $note_maths=15;
           $note_francais=12;
           $note_histoire_geo=9;
           $moyenne=( $note_maths+$note_francais+$note_histoire_geo)/3;
           echo 'la moyenne est de'.$moyenne.'/20';
         ?>
</body>
</html>