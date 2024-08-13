<?php
       $y=$_POST['A'];
        $z=$_POST['B'];
        if (isset($_POST[btsuma]))
        {
            $c=$y+$z;            echo '<h1>'.$y. '+'.$z.'</h1>'.'ES:  '.$c;
        }
        if (isset($_POST[btresta]))
          {
              $c=$y-$z;            echo '<h1>'.$y. '-'.$z.'</h1>'.'ES:  '.$c;
        }
        if (isset($_POST[btmult]))
        {
              $c=$y*$z;            echo '<h1>'.$y. '*'.$z.'</h1>'.'ES:  '.$c;
        }
         if (isset($_POST[btdiv]))
         {
             if ($z !=0) $c=$y /$z;
else 
     $c=0;
 echo '<h1>'.$y. '/'.$z.'</h1>'.'ES:   '.$c;
         }
            ?>    
