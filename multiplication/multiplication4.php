 <?php
         
             
              for ($i=0; $i <13 ; $i++) { 
                  
         
                $result= (int) readline("combien ont 5*$i=?:");
                $table5=[0,5,10,15,20,25,30,35,40,45,50,55,60];
               if ($result !== $table5[$i] ) {
                   echo $score=0+$i;
               break;
               }
            }
     ?>       