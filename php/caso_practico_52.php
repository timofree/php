<!DOCTYPE html>
<html>
<head>
   <title>Caso practico 5.2</title>
</head>
<body>

<?php


 function isPrime($number){ // Forma mejorada
    $cont = 0;
   if($number%2 == 0){
      return false;
   }

   for($i=3 ; $i < sqrt($number); $i+=2){
      $cont++;

      if($number%$i==0){
         echo "Numero de repeticioes   ".$cont;
         return false;
      }
   }echo "Numero de repeticioes   ".$cont;

   return true;
 }

 function isPrime2($number){ // Forma basica (muchas repeticiones)

    $cont = 0;


   for($i=2 ; $i < $number ; $i++ ){
      $cont++;

      if($number%$i==0){
         "Numero de repeticioes  ".$cont;
         return false;
      }
   }
   echo "Numero de repeticioes   ".$cont;
   return true;
 }



 function  tellIfPrime($number){

   if(isPrime($number)){

      echo " es Primo";
   }else{
      echo "No es primo";
   }
   echo "<br>";

   if(isPrime2($number)){

      echo " es Primo 2 ";
   }else{
      echo "No es primo 2";
   }
   echo "<br>";
 }

 tellIfPrime(983);
 tellIfPrime(104729);
 //tellIfPrime(2147483647);


?>

</body>
</html>