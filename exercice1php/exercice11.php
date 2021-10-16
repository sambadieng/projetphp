<!DOCTYPE html>
<html>
<head>
	<title>RESULTAT</title>
	<meta charset="utf-8">
</head>
<body>
        <?php 

          $table1= [1,2,3,4,5];
          $table2=[1,11,111,1111,11111]; 
          for ($i=0; $i<5 ; $i++) { 
              for ($j=0; $j < 5  ; $j++) { 
                  if ($i==$j) {
                      echo  $table1[$i] * $table2[$j]  ."<br>";
                  }
               }
          }
        
        ?>


</body>
</html>