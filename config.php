<?php 
session_start();

try {
	$pdo = new PDO("mysql:dbname=db_classificados;host=localhost","root","");
} catch (PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
}

 ?>