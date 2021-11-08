<h1>
<?php

      $multiple=$_GET["mu"];
      if (1<=$multiple && $multiple<=12) {
      	
     
      for ($i=1; $i <=12 ; $i++) { 
            $result=$multiple*$i;
            echo $multiple.' '."*".$i."=".$result."<br>";
      }
   }
   else{
   	header("location:multiplication.php");
   }
?>
</h1>