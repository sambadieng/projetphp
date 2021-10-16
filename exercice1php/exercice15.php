<!DOCTYPE html>
<html>
<head>
	<title>Boucle de tableau</title>
	<meta charset="utf-8">
</head>
<body>
         <?php
            $table=array();
            $table1=array();
            $table2=array();
            for ($i=0; $i<10 ; $i++) { 
              	$table[$i]= rand(0,99);
              	
              	 
              }  
             foreach ($table as $key => $table) {
             	if ($table<=50) {

             		$table1[]=$table;

             	}
             	else{
             		$table2[]=$table;
             	}
             }
       
              var_dump($table1);
              var_dump($table2);

         ?>
</body>
</html>