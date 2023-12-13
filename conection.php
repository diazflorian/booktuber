<?php
$user = "if0_35509454";
$password = "565cnhThjliR";
$host = "sql300.infinityfree.com";
$datab = "if0_35509454_db_biblioteca";

$dsn = "mysql:host=$host;dbname=$datab";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
