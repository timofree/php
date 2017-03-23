<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Prueba formulario</title>
</head>
<body>
<?php
if(!empty($errors)){
 foreach ($errors as $error){
 echo "$error <br>";
 }
}

?>
<form action="index2.php" method="POST">
 <label for="username">Nombre:</label>
 <input type="text" name="username" required value="<?= $_POST['username'] ?? ''; ?>">
 <label for="password">Clave:</label>
 <input  name="password" type="password" required >
 <input type="submit" value="Enviar">
</form>
</body>
</html>