<?php
if(isset($_POST['p1']) && !empty($_POST['p1'])) {
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$t1 = $_POST['t1'];
	$t2 = $_POST['t2'];
} else {
	$p1 = null;
}
$file_dir = '../json/dados.json';
$dados = file_get_contents($file_dir);

if($p1 != null) {
	$dados = json_decode($dados);
	$count = count($dados);
	$dados[$count] = new stdClass();
	$dados[$count]->p1 = $p1;
	$dados[$count]->p2 = $p2;
	$dados[$count]->t1 = $t1;
	$dados[$count]->t2 = $t2;

	file_put_contents($file_dir, json_encode($dados));
	$newDados = file_get_contents($file_dir);

	echo $newDados;
} else {
	echo $dados;
}