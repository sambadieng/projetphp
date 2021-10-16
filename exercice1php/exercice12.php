<!DOCTYPE html>
<html>
<head>
	<title>NOTION DE VARIABLE</title>
	<meta charset="utf-8">
</head>

<body>
     <?php
            $ZERO=0;
            while ($ZERO<=20) {
            	    if ( $ZERO==10) {
         	     echo "<strong>".$ZERO."</strong>"."<br>";
               }
                else {
                      echo $ZERO."<br>";
               }
            	
            	$ZERO=$ZERO+2;
            
            }
            
        ?>
</body>
</html>

