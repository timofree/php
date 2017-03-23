<!DOCTYPE html>
<html>
<head>
   <title>CAso practico 4.2</title>
</head>
<body>

<?php
$biblioteca = [
 "cine" => [
 "El guión",
 "Hitchcock",
 ],
 "programacion" => [
 "Patterns",
 "Clean Code",
 "Refactoring"
 ],
];

echo "<ul>";
foreach ($biblioteca as $genero => $libros) {

       echo "<li>";
           echo $genero;
                 echo "<ul>";
                       foreach ($libros as $libro) {
                             echo " <li> ".$libro."</li> ";
                       }
                 echo "</ul>";
       echo "</li>";
}
echo "</ul>";



?>

</body>
</html>