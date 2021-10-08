<!DOCTYPE html>
<html>
<head>
	<title>FORMULAIRE1</title>
	<meta charset="utf-8">
</head>
<body>
   

	<p>
      <?php
              $prenom  = $_POST["prenom"];
            echo "PRENOM:".  $prenom    
       ?>
       </p>
       <p>
        <?php
          $nom  = $_POST["nom"];
            echo "NOM:".  $nom;

        ?>
        </p>

        <p>
        	<?php
          $soumettre = $_POST["message"];
            echo  "MESSAGE:". $soumettre;

        ?>
        </p>
        <?php
       if ($_POST["prenom"]=="") {
          header("location: formulaire.php");  
        }
        elseif ($_POST["nom"]=="") {
           header("location: formulaire.php"); 
        }
        elseif ($_POST["message "]=="") {
           header("location: formulaire.php"); 
        }
      ?>
        
            
</body>
</html>
