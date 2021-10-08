<!DOCTYPE html>
<html>
<head>
	<title>FORMULAIRE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
	<div class="divmax">
      <form method="post" action="formulaire1.php ">
      	  <label for="pre" >Prenom:</label>
      	  <input type="text" name="prenom" id="prenom" ><br>
           
      	     <label for="nom" class="nom" >nom:</label>
      	     <input type="text" name="nom" id="nom"><br>
            
          <label for="mes"  id="mess">message:</label>
      	  <textarea id="mes" name="message"></textarea><br>
          <input type="submit" name="submit" value="Envoyer" id="envoyer">
      </form>
    </div>
</body>
</html>