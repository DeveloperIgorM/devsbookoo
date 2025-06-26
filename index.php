<?php 

require 'config.php';
require 'models/Auth.php';

// SE eu quiser saber se o usuário está logado, uso essa duas linhas abaixo.
$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

echo 'Index';