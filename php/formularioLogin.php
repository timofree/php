<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba formulario</title>
</head>
<body>
<?= var_dump($_POST) ?>
<?= isset($_POST['username']) ? $_POST['username']: ' '; ?>

<form action="" method="POST">
    <label for="username"  required>Nombre: </label>
    <input type="text" name="username" value="<?= $_POST['username'] ?? ' '; ?>">
    <label for="password" required>Clave:</label>
    <input type="password" name="password" >
    <input type="submit" value="Enviar">
</form>

<?php
function validateForm(){
       $errors = [];
       if (strlen(trim($_POST['username'])) < 6){
             $errors[] = 'El nombre de usuario debe
            tener, al menos, 6 caracteres.';
       }
       if (strlen(trim($_POST['password'])) < 6){
             $errors[] = 'La clave de usuario debe
            tener, al menos, 6 caracteres.';
       }
       return $errors;
}
      if (!empty($_POST)){
            $errors = validateForm();
            if (!empty($errors)){
                  foreach ($errors as $error){
                        echo "$error <br>";
                  }
           }
      }


function tryLogin($user, $pass){
 $register_username = 'mi_nombre';
 $register_password = 'mi_clave';
 return ($user === $register_username &&
$password === $_register_password) ? true : false;
}
if (!empty($_POST)){
 $errors = validateForm();
 if (!empty($errors)){
 foreach ($errors as $error){
 echo "$error <br>";
 }
 } else {
 $userIsRegister = tryLogin($_POST['username'],
$_POST['password']);
}
if (true === $userIsRegister){
 echo 'Bienvenido.';
}else{
 echo 'Nombre de usuario o clave incorrecta';
?>
<form action="" method="GET">
 <label for="username">Nombre:</label>
 <input type="text" name="username" required
value="<?= $_POST['username'] ?? ' '; ?>">
 <label for="password">Clave:</label>
 <input type="password" name="password" required>
 <input type="submit" value="Enviar">
</form>
<?php } ?>
?>
</body>
</html>