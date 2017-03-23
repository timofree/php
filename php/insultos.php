<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style type="text/css">
  h1 { color: red;
    font-family: Verdana;
    size: 14px;
    margin:20px;
    +
     }
  h2 { color: black; font-family: Verdana;size: 10px; }
  .button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
</style>
</head>
<body>
<?php
$concursantes = ['David','Lorenzo','Mateo','Emilio','Gabi','Jordi','Pau','Jaime','Miguel'];
$insultos =['Cara','Boca','Cuerpo',];
$muletas=['Chancla','Escombro','estropajo','troll'];
    function insulto($insultos){
        $numero_insulto=count($insultos);
        $resultado= rand(0,$numero_insulto-1);
          foreach ($insultos as $key => $name) {
            if ($resultado==$key) {
                    return "<h1> $name </h1>";
                };

        };

    };
    function muleta($muletas){
        $numero_muleta=count($muletas);
        $resultado= rand(0,$numero_muleta-1);
          foreach ($muletas as $key => $name) {
            if ($resultado==$key) {
                    return "<h1> $name </h1>";
                };

        };

    };
function concurso($concursantes){
        $numero_concursantes=count($concursantes);
        $ganador= rand(0,$numero_concursantes-1);
        foreach ($concursantes as $key => $name) {
            if ($ganador==$key) {
                    return " $name ";
                };

        };
    };
$nombre_insulto=concurso($concursantes);
$insulto_1=insulto($insultos);
$insulto_2=muleta($muletas);
echo "<h2>$nombre_insulto es un</h2>";
Echo $insulto_1;
Echo $insulto_2;
?>
<a href="" onclick="concurso()" class="button">Genera un insulto</a>
</body>
</html>