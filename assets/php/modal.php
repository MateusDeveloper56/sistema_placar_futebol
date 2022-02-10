<?php
include 'conexao_banco.php';

$query = "SELECT * FROM placares ORDER BY pts DESC, nome ASC, v DESC, gp DESC, sg DESC";
$query = $pdo->query($query);
if(count($query) > 0) {
	$dados = $query->fetchAll();
	if(count($dados) > 0) {
		echo json_encode($dados);
	}
}

// Query para resetar o placar.
// $query = "UPDATE placares SET pts = 0, j = 0, v = 0, e = 0, d = 0, gp = 0, gc = 0, sg = 0";
// $query = $pdo->prepare($query);
// $query->execute();

exit;
?>