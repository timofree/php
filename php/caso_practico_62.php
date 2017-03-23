<!DOCTYPE html>
<html>
<head>
   <title>caso practico 6.2</title>
</head>
<body>
<?php

palindromo("Amor a    Roma");

function palindromo ($palabra){


     $palabra = trim($palabra); // Quita los espacios

     $palabra = str_replace(" ", "",$palabra); // Quita los espacio de enmedio de la cadena.

     $palabra = strtolower($palabra); // Pone todas las letras a minisculas.

     $palabraRev = strrev($palabra); // Pone la palabra/frase al reves.

     if(strcmp ($palabra , $palabraRev ) == 0 ){ // compara que las dos cadenas sean iguales.

      echo "es palindromo";
     }else{
      echo "no es palindromo";
     }



}

?>

</body>
</html>