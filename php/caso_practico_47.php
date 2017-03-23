<!DOCTYPE html>
<html>
<head>
   <title>CAso practico 4.2</title>
</head>
<body>

<?php
 $cont = 100;
   while($cont > 0){
          if(1 == $cont ){
      echo "1 botella de cerveza en la pared,
            1 botella de cerveza.
            Coge una y pásala ";
            echo "<br>";
        }else{
         echo $cont." botellas de cerveza en la pared,
                ".$cont." botellas de cerveza.
                Coge una y pásala" ;
         echo "<br>";
          }
      $cont--;
}
echo "No quedan botellas de cerveza en la pared.
No quedan botellas de cerveza.
Ir a la tienda y comprar alguna más...
99 botellas de cerveza.";


?>

</body>
</html>