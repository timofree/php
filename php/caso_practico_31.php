<!DOCTYPE html>
<html>
<head>
   <title>Caso practico 3.1</title>
</head>
<body>
<?php
$people = [
 ['name' => 'Juan', 'age' => 18],
 ['name' => 'Paco', 'age' => 89]
 ];

 if($people[0]['age']>$people[1]['age']){

   $dif = $people[0]['age'] - $people[1]['age'];
   echo $people[0]['name']."  tiene ".$dif." años mas que ".$people[1]['name'] ;

 }elseif ($people[0]['age']<$people[1]['age']) {

    $dif = $people[1]['age'] - $people[0]['age'];
    echo $people[1]['name']."  tiene ".$dif ." años  mas que ".$people[0]['name'] ;

 }else{
echo $people[1]['name']." tiene la misma edad que  ".$people[0]['name'] ;

 }


?>

</body>
</html>