<!DOCTYPE html>
<html>
<head>
	<title>Tabela de Classificação</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="containerint">
			<div class="msg"></div>
			<div class="modal_box">
				<div class="modal">
					<div class="top"><span id="close">x</span></div>
					<form method="POST" id="formModal">
						<h3>Confronto</h3>
						<div class="inputs">
							<div>
								<label for="t1">Time da Casa</label>
								<div>
									<select id="t1" required></select>
									<input type="text" maxlength="3" id="p1" placeholder="0" required/>
								</div>
							</div>
							<div class="campox">
								<div>x</div>
							</div>
							<div>
								<label for="t2">Visitante</label>
								<div>
									<input type="text" maxlength="3" id="p2" placeholder="0" required/>
									<select id="t2" required></select>
								</div>
							</div>
						</div>
						<div class="botoes">
							<button id="btnClose">Fechar</button>
							<button id="btnSalvar">Salvar mudanças</button>
						</div>
					</form>
				</div>
			</div>
			<div class="botao">
				<button id="botao">Inserir Confronto</button>
			</div>
			<div class="tabela">
				<div class="titulo"><h2>TABELA</h2></div>
				<div>
					<table id="table">
						<tr>
							<th class="psc">Posição</th>
							<th class="pts">PTS</th>
							<th>J</th>
							<th>V</th>
							<th>E</th>
							<th>D</th>
							<th>GP</th>
							<th>GC</th>
							<th>SG</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>