<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>xd</title>
  </head>
  <body>
    <h1>Proměné</h1>
<?php


    define("PI", 3.14) ;
    $r=5 ;
    $S= PI*$r*$r;
    $obvod=  2*PI*$r;
 ?>
 <p> Poloměr : <?php echo $r  ?> </p>
 <p> Obsah kruhu : <?php echo "S = PI * r * r =  " . PI . " * $r * $r ="  ?> <?php echo $S ?> </p>
 <p> Obvod kruhu : O = <?php echo "2 * PI * r =  2 * " . PI . " * $r " ?> = <?php echo $obvod ?></p>

 <div style="width":40px ; height:40px ; border-radius:20px ;
   
  </body>
</html>
