<?php 

$base = 'http://localhost/devsbookoo';

$db_name = 'newdevsbook';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

// Criando instância PDO
$pdo = new PDO("mysql:dbname".$db_name.";host=".$db_host, $db_user,$db_pass);