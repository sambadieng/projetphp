<!DOCTYPE html>
<html>
<head>
	<title>TTC</title>
	<meta charset="utf-8">
</head>
<body>
         <p>CALCUL DU PRIX TTC DE PRODUIT</p>
         <?php
            $prix_ht=50;
            $tva=20;
            $prix_ttc=$prix_ht+(($tva/100)*$prix_ht);
           echo "Le prix TTC du produit est:".$prix_ttc."€";
         ?>
</body>
</html>