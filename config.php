<?php 
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=db_classificados;host=localhost","root","");
} catch (PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
}

 ?>