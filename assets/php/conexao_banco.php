<?php
$dsn = "mysql:dbname=placar_futebol;host=127.0.0.1;charset=utf8";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	#echo 'Conexão feita com sucesso.';
} catch(PDOException $error) {
	echo 'Não foi possível fazer conexão com o banco de dados'.$error->getMessage();
	exit;
}