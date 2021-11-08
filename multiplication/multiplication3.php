
         <?php
         //   $table4=[0];
             
              for ($i=0; $i <13 ; $i++) { 
                  
          //      $table4=[0,4,8,12,16,20,24,28,32,36,40,44,48];
                $result= (int) readline("combien ont 4*$i=?:");
                $table4=[0,4,8,12,16,20,24,28,32,36,40,44,48];
               if ($result !== $table4[$i] ) {
                   echo $score=0+$i;
               break;
               }
            }