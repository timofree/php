<!DOCTYPE html>
<html>
<head>
   <title>Caso practico 5.1</title>
</head>
<body>
<?php

$nombres = ['paco','antonio','laura','maria'];

ganador($nombres);

function ganador($nombres){

   foreach ($nombres as $nombre) {

      echo $nombre ;
      echo "<br>";
   }

   $long = count($nombres);

   $num_gandor = rand(0, $long-1);

   echo "el ganador es: ".$nombres[$num_gandor] ;
   echo "<br>";
   echo " Lo siento estos han perdido : " ;
   echo "<br>";

   for($i = 0 ; $i < $long ; $i++){
      if( $num_gandor != $i){

         echo $nombres[$i];
         echo "<br>";
      }
   }



}

?>

</body>
</html>