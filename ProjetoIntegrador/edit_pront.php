<?php
	$acao = 'recuperar_pront';
	require 'cadastro_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela de prontuário</title>
	<link rel="stylesheet" type="text/css" href="projeto.css">
</head>
<body>
<header class="header">
	<h1 align="Center">Clínica Odontológica - UNISAGRADO</h1>
</header>
<h3 class="class">
		<a href="index.php" class="class">Home </a> | 
		<a href="Usuarios.php" class="class">Usuarios Cadastrados </a> | 
		<a href="Projeto.php" class="class">Cadastrar Novo </a> | 
</h3>
<div class="estilo">
<h1>Prontuario</h1>

<form action="cadastro_controller.php?acao=atualizar_pront" method="POST">
<input type="text" name="nome" readonly="" value="<?=$registro[0]->nome?>">
<br><br>
<textarea name="consulta" rows="5" cols="65" style="resize: none;"><?=$registro[0]->consulta?></textarea>

<input type="hidden" name="id" value="<?=$registro[0]->id?>">
<br><br>
<input type="submit" value="Cadastrar" class="class2">
</form>
</div>
</body>
</html>	