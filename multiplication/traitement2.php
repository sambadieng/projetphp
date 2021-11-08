<?php
    $result=$_GET["mult"];
    if ($result=='40') {
    	echo "BRAVO ,vous avez trouvé la bonne reponse";
    }

?>

<a href="multiplication2.php ">
<?php
    $result=$_GET["mult"];
    if ($result!='40') {
    	echo "DESOLE ,vous devez saisir la bonne reponse";
    }

?>
</a>