<?php
{
	$acao = 'recuperar_um';
	require_once 'cadastro_controller.php';
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="projeto.css">
<meta charset="utf-8">
</head>
<body>
<header class="header">
	<h1 align="Center">Clínica Odontológica</h1>
</header>
<h3 class="class">
	<a href="index.php" class="class">Home </a>
	<a href="Usuarios.php" class="class"> Visualizar Usuários </a>
	<a href="Sobre" class="class">Sobre</a>
</h3>
<div class="estilo">
<h1>Cadastro</h1>
<body>
	<form method="post" action="cadastro_controller.php?acao=atualizar">
<input type="text" name="nome" size="50" required="nome" placeholder="Nome..." value="<?=$registro[0]->nome?>">
<br><br>
<input type="date" name="data" class="classdate" value="<?=$registro[0]->data_nasc?>">
<input type="text" name="sexo" size="19" required="sexo" placeholder="Sexo..." value="<?=$registro[0]->sexo?>" >
<br>
<input type="text" name="peso" class="margem" placeholder="Peso..." required="" value="<?=$registro[0]->peso?>">
<input type="text" name="altura" placeholder="Altura..." required="" value="<?=$registro[0]->altura?>">
<br>

<input type="text" name="cor" placeholder="Cor..." class="margem" required="" value="<?=$registro[0]->cor?>">
<input type="text" name="escolaridade" placeholder="Escolaridade..." required="" value="<?=$registro[0]->escolaridade?>">
<br>

<input type="text" name="profissao" size="50" placeholder="Profissão..." required="" value="<?=$registro[0]->profissao?>">
<br>

<input type="text" name="rg" class="margem" placeholder="RG..." required="" value="<?=$registro[0]->rg?>">
<input type="text" name="cpf" placeholder="CPF..." required="" value="<?=$registro[0]->cpf?>">
<br>

<input type="text" name="estadocivil" placeholder="Estado Civil..." size="50" required="" value="<?=$registro[0]->estado_civil?>" >
<br>
<input type="text" name="naturalidade" class="margem" placeholder="Naturalidade..." required="" value="<?=$registro[0]->naturalidade?>">
<input type="text" name="estado" placeholder="Estado..." required="" value="<?=$registro[0]->estado?>">
<br>

<input type="text" name="nomepai" placeholder="Nome do pai..." class="margem" required="" value="<?=$registro[0]->nome_pai?>">
<input type="text" name="nacionalidadepai" placeholder="Nacionalidade..." value="<?=$registro[0]->nacionalidade_pai?>">
<br>

<input type="text" name="nomemae" placeholder="Nome da mãe..." class="margem" required="" value="<?=$registro[0]->nome_mae?>">
<input type="text" name="nacionalidademae" placeholder="Nacionalidade..." value="<?=$registro[0]->nacionalidade_mae?>">
<br>

<input type="text" name="contato" size="50" placeholder="Contatos (tel/cel)..." required="" value="<?=$registro[0]->contato?>">
<br>
<input type="text" name="endereco" placeholder="Endereço..." class="margem" size="30" required="" value="<?=$registro[0]->endereco?>">
<input type="text" name="numEndereco" size="10" placeholder="Nº" required="" value="<?=$registro[0]->numEndereco?>">

<br>
<input type="text" name="complemento" class="margem" placeholder="Complemento..." required="" value="<?=$registro[0]->complemento?>">
<input type="text" name="bairro" placeholder="Bairro..." required="" value="<?=$registro[0]->bairro?>">
<br>

<input type="text" name="cep" placeholder="CEP..." size="50" value="<?=$registro[0]->cep?>">
<br>
<input type="text" name="cidade" class="margem" placeholder="Cidade..." required="" value="<?=$registro[0]->cidade?>">
<input type="text" name="estado2" placeholder="Estado..." required="" value="<?=$registro[0]->estado2?>">

<br><br>
<input type="hidden" name="id" value="<?=$registro[0]->id?>">
<input type="submit" value="Atualizar" class="class2">
</form>

</body>
</html>