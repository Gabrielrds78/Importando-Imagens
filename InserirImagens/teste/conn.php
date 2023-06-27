<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=testes;host=127.0.0.1';
$user = 'root';
$password = '123456';

$pdo = new PDO($dsn, $user, $password);

?>