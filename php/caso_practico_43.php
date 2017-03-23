<!DOCTYPE html>
<html>
<head>
   <title>CAso practico 4.2</title>
</head>
<body>

<?php
$num = 9;
$number_first = 20 ;
$number_last =  30 ;
$cont = $number_first;
while($cont <= $number_last){
    $res = $cont * $num;
    echo  $num." * ".$cont."  =  ".$res;
    echo  "<br>";
    $cont++;
}
?>

</body>
</html>