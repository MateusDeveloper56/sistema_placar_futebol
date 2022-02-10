<?php
include 'conexao_banco.php';

if(isset($_POST['p1'])) {
	$p1 = addslashes($_POST['p1']);
	$p2 = addslashes($_POST['p2']);
	$t1 = addslashes($_POST['t1']);
	$t2 = addslashes($_POST['t2']);
	$ptsP1 = 0;
	$ptsP2 = 0;
	$v1    = 0;
	$v2    = 0;
	$e     = 0;
	$d1    = 0;
	$d2    = 0;

	if(intval($p1) > intval($p2)) {
		$ptsP1 = 3;
		$v1    = 1;
		$d2    = 1;
	} elseif (intval($p1) < intval($p2)) {
		$ptsP2 = 3;
		$v2    = 1;
		$d1    = 1;
	} else {
		$ptsP1 = 1;
		$ptsP2 = 1;
		$e = 1;
	}
	$ids = strval(intval($t1)).','.strval(intval($t2));

	$query = "UPDATE placares SET pts = pts + :pts, j = j + 1, v = v + :v, e = e + :e, d = d + :d, gp = gp + :gp, gc = gc + :gc, sg = sg + (:glsp - :glsc) WHERE id = :id";
	$query = $pdo->prepare($query);
	$query->bindValue(':pts', $ptsP1);
	$query->bindValue(':v', $v1);
	$query->bindValue(':e', $e);
	$query->bindValue(':d', $d1);
	$query->bindValue(':gp', intval($p1));
	$query->bindValue(':gc', intval($p2));
	$query->bindValue(':glsp', intval($p1));
	$query->bindValue(':glsc', intval($p2));
	$query->bindValue(':id', intval($t1));
	$query->execute();

	$query = "UPDATE placares SET pts = pts + :pts, j = j + 1, v = v + :v, e = e + :e, d = d + :d, gp = gp + :gp, gc = gc + :gc, sg = sg + (:glsp - :glsc) WHERE id = :id";
	$query = $pdo->prepare($query);
	$query->bindValue(':pts', $ptsP2);
	$query->bindValue(':v', $v2);
	$query->bindValue(':e', $e);
	$query->bindValue(':d', $d2);
	$query->bindValue(':gp', intval($p2));
	$query->bindValue(':gc', intval($p1));
	$query->bindValue(':glsp', intval($p2));
	$query->bindValue(':glsc', intval($p1));
	$query->bindValue(':id', intval($t2));
	$query->execute();

	echo '#cadastrou';
	exit;
}