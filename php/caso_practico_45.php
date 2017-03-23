<!DOCTYPE html>
<html>
<head>
   <title>CAso practico 4.2</title>
</head>
<body>

<?php
$open = [
 'l' => [[10.00, 14.00], [16.00, 20.00]],
 'm' => [[10.00, 14.00], [16.00, 20.00]],
 'x' => [[10.00, 14.00], [16.00, 20.00]],
 'j' => [[10.00, 14.00], [16.00, 20.00]],
 'v' => [[10.00, 14.00], [16.00, 20.00]],
 's' => [[10.00, 20.00]],
 'd' => []
];
$day = 's';
$time = 15.00;
$abierto = false;



foreach ($open[$day] as $openrange) {
           if($time>$openrange[0] && $time<$openrange[1]){
            $abierto = true;
           }
}

if($abierto){
   echo "esta abierto";
}else{
   echo "esta cerrado";
}



?>

</body>
</html>