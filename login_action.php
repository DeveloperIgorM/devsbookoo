<?php

// Responsabilidade da action
// Receber dados de login, verificar -> logar ou não

require 'config.php';
require 'models/Auth.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($email && $password) {

  // Instanciando Auth
  $auth = new Auth($pdo, $base);

  if($auth->validateLogin($email, $password)) {
    header("Location: ".$base);
    exit;
  } 
}

$_SESSION['flash'] = 'E-mail e/ou Senha incorretos';
header("Location: ".$base."/login.php");
exit;