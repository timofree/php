<!DOCTYPE html>
<html>
<head>
   <title>CAso practico 4.1</title>
</head>
<body>

<?php
$open = ['from' => 10.00, 'to' => 20.00];
$t = 23.00;

if ( $t<$open['from'] || $t>$open['to'] ) {
   echo " esta cerrado";
}else{

   echo " esta abierto";
}

?>

</body>
</html>