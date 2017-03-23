<?php
$caducidad = time() + 10;

$cont = isset($_COOKIE['visitas']) ? ++$_COOKIE['visitas'] : 1;
setcookie("visitas", $cont,$caducidad);
echo "han visitado esta pagina  ". $cont ."veces  ";






?>