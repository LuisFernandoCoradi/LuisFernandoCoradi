<?php
	$acao='recuperar';
	require 'cadastro_controller.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tela Inicial</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">

		<script>
			function editar_cad(id){
				location.href = 'edit_usuario.php?id='+id;
			}
			function questionario(id){
				location.href = 'Projeto-3.php?id='+id;
			}
			function ficha(id){
				location.href = 'Ficha.php?id='+id;
			}
			function prontuario(id){
				location.href = 'edit_pront.php?id='+id;
			}
			function deletar(id){
            location.href = 'deletar.php?id='+id;
			}
		</script>

	</head>

	<body>
		
		<div class='container'>
			
			<div style="background-image:linear-gradient(to top,#9400d3,indigo); text-align: center;">
				<h1>
					Clínica Odontológica - UNISAGRADO
				</h1>
				
			</div>

			<div style="background-color:linen;text-align:center;height: 450px">

				<table style="width:100%">
					
					<thead>
						<tr>
							<th>Nome</th>
							<th>CPF</th>
						</tr>
					</thead>

					<tbody>

					<?php foreach($cadastros as $indice => $cadastro){?>

					<tr #id="cadastro_<?=$cadastro->id ?>">
						<td><?=$cadastro->nome ?></td>
						<td><?=$cadastro->cpf ?></td>
						<td><button onclick="editar_cad(<?=$cadastro->id ?>)">Atualizar Cadastro</button></td>
						<td><button onclick="questionario(<?=$cadastro->id ?>)">Fazer a Ficha</button></td>
						<td><button onclick="ficha(<?=$cadastro->id ?>)">Visualizar Ficha</button></td>
						<td><button onclick="prontuario(<?=$cadastro->id ?>)">Fazer o Prontuário</button></td>
						<td><button onclick="deletar(<?=$cadastro->id ?>)">Deletar Usuario </button></td>

					</tr>
					<?php } ?>

					</tbody>					
				</table>
			</div>

			<div class='buttonContainer'>
				<button class="class2">
					<a href="index.php" style="text-decoration: none; color: white;">Voltar ao Inicio </a>
				</button>
				<button class='class2' onclick>
					<a href="Projeto.php" style="text-decoration: none; color: white;">Cadastrar</a> 
				</button>
			</div>
		</div>
	</body>	
</html>

