<?php
$userIsRegister = false;
function validateForm(){
    $errors = [];
    if(strlen(trim($_POST['username'])) < 6){
       $errors[] = 'El nombre de usuario debe tener, al menos, 6 caracteres.';
    }
    if(strlen(trim($_POST['password'])) < 6){
       $errors[] = 'La clave de usuario debe tener, al menos, 6 caracteres.';


   }
   return $errors;
}
function tryLogin($user, $password){
    $register_username ='jordigimeno';
    $register_password ='$2y$10$UeTCAXRI9AENAPhogHaoj.3eehg.FIPEU88Og9zXtuwknBdGCOS/e';


    return ($user === $register_username && password_verify($password, $register_password)) ?  true : false;
}

if (!empty($_POST)){
    $errors = validateForm();
    if(empty($errors)){
      $userIsRegister = tryLogin($_POST['username'], $_POST['password']);
    }
}


if (true === $userIsRegister){
    include 'welcome.php';
} else {
 if (!empty($_POST)){
    $errors[] = 'Nombre de usuario o clave incorrecta';
 }
 include 'form.php';
}



?>