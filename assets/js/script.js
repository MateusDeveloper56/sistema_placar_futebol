$(document).ready(function() {
	funcao_geral();
	buscaDadosJson();
});

function funcao_geral() {
	let botao = $("#botao");
	let close = $("#close");
	let modal = $(".modal_box");
	let top   = $(".modal_box .modal .top");
	let btnClose  = $("#btnClose");
	let btnSalvar = $("#btnSalvar");
	let p1 		  = $("#p1");
	let p2 		  = $("#p2");
	let t1 		  = $("#t1");
	let t2 		  = $("#t2");

	botao.click(function() {
		modal.css('display', 'flex');
	});
	close.click(function() {
		modal.css('display', 'none');
	});
	btnClose.click(function() {
		modal.css('display', 'none');
		return false;
	});
	btnSalvar.click(function() {
		if(p1.val() == '') {
			msg('Favor preencher o campo Placar 1!', '#ada113');
			p1.focus();
			return false;
		}
		if(p2.val() == '') {
			msg('Favor preencher o campo Placar 2!', '#ada113');
			p2.focus();
			return false;
		}
		if(t1.val() == t2.val()) {
			msg('Os times selecionados não podem ser iguais!', '#ada113');
			t1.focus();
			return false;
		}

		let dadosJson = {p1:p1.val(), p2:p2.val(), t1:t1.val(), t2:t2.val()};

		insert_confronto(dadosJson);
		modal.css('display', 'none');
		return false;
	});
	// top.attr('ondragexit', true);
}
function buscaDadosJson() {
	$.ajax({
		async: true,
		url: "assets/php/modal.php",
		type: "POST",
		data: {},
		dataType: "json",
		success: function(response) {
			let pcs = 1;
			let classe;
			$("#table").html('<tr><th class="psc">Posição</th><th class="pts">PTS</th><th>J</th><th>V</th><th>E</th><th>D</th><th>GP</th><th>GC</th><th>SG</th></tr>');
			$("#t1").html('');
			$("#t2").html('');

			response.forEach((value) => {
				classe = (pcs <= 7)?'class="cl"':'';
				classe = (pcs >= 8 && pcs <= 14)?'class="cl2"':classe;
				classe = (pcs >= 17 && pcs <= 20)?'class="cl3"':classe;
				let all = $("#table").html() + '<tr><td colspan="9" class="line"></td></tr>' + 
				'<tr>'+
				'<td class="psc"><span '+classe+'>'+pcs+'°</span> '+value['nome']+'</td>'+
				'<td class="pts">'+value['pts']+'</td>'+
				'<td>'+value['j']+'</td>'+
				'<td>'+value['v']+'</td>'+
				'<td>'+value['e']+'</td>'+
				'<td>'+value['d']+'</td>'+
				'<td>'+value['gp']+'</td>'+
				'<td>'+value['gc']+'</td>'+
				'<td>'+value['sg']+'</td>'+
				'</tr>';
				$("#table").html(all);
				pcs++;

				let time   = $("#t1").html() + '<option value="'+value['id']+'">'+
				value['nome']+'</option>';
				$("#t1").html(time);

				let timeII = $("#t2").html() + '<option value="'+value['id']+'">'+
				value['nome']+'</option>';
				$("#t2").html(timeII);
			});
		}
	});
}
function insert_confronto(dadosJson) {
	let {p1, p2, t1, t2} = dadosJson;

	$.ajax({
		async: true,
		url: "assets/php/insert_confronto.php",
		type: "POST",
		data: {
			p1: p1,
			p2: p2,
			t1: t1,
			t2: t2
		},
		dataType: "html",
		success: function(response) {
			if(response == '#cadastrou') {
				msg('Dado inserido com sucesso.', '#3fb73f');
				buscaDadosJson();
			}
		}
	});
}
function msg(msg, cor) {
	$(".msg").html(msg);
	$(".msg").css('display', 'block');
	$(".msg").css('background-color', cor);
	setTimeout(function() {
		$(".msg").css('display', 'none');
	}, 5000);
}