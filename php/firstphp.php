<!DOCTYPE html>
<html>
<head>
    <title>Prueba PHP</title>
</head>
<body>
<?php
//phpinfo();
//echo "hola amigo";
//echo  23+9;

 $yeee = array(0 => 1 + 5,
               1 => 4.5,
               2 => "hola paco",
               3 => false,
               4 => null,
               );
 $yeee2 = array('id' => 1 + 5,
               'precio' => 4.5,
               'nombre' => "hola paco",
               'sino' => false,
                'vacio' => null,
               );
 echo date('l jS \of F Y h:i:s A');
 echo "<br>";
 echo "clave_valor";
 echo "<br>";
 echo ($yeee2['id']);
 echo "<br>";
 echo ($yeee2['precio']);
  echo "<br>";
 echo $yeee[0];
 echo "<br>";
 echo var_dump($yeee[1]);
 echo "<br>";
 echo $yeee[2];
 echo "<br>";
 echo $yeee[3];
 echo "<br>";
 echo $yeee[4];
echo "<br>";
 var_dump($yeee);
 echo "<br>";
 echo '<br>';

echo "Esto se imprimirá en \n 2 lineas";

 echo 3 + 017; // el 017 esta en octal
 echo "<br>";
for ($i=0 ; $i < count($yeee); $i++) {
    var_dump($yeee[$i]);
}
 echo "<br>";
echo 'Esto es una cadena
partida en varias lineas';
 echo "<br>";
echo <<<EOD
Hola $yeee[1]
este es un ejemplo de cadena
expresada mediante la sintaxis heredoc.
EOD;

?>

</body>
</html>