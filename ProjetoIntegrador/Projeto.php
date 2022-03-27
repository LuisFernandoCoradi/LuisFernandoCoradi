
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="projeto.css">
<meta charset="utf-8">
</head>
<body>
<header class="header">
	<h1 align="Center">Clínica Odontológica - UNISAGRADO</h1>
</header>
<h3 class="class">

		<a href="index.php" class="class">Home </a> | 
		<a href="Usuarios.php" class="class">Usuarios Cadastrados </a> | 
		<a href="projeto.php" class="class">Cadastrar Novo </a> | 

</h3>
<div class="estilo">
<h1>Cadastro</h1>

<form action="cadastro_controller.php?acao=inserir" method="POST">
<input type="text" name="nome" size="50" required="nome" placeholder="Nome...">
<br><br>
<input type="date" name="data" min="1970-12-31" max="2021-12-31" class="classdate">
<select name="sexo" required="">
	<option value="">Selecione o sexo</option>
	<option value="Masculino">Masculino</option>
	<option value="Feminino">Feminino</option>
</select>
<br>
<input type="text" name="peso" class="margem" placeholder="Peso..." required="">
<input type="text" name="altura" placeholder="Altura..." required="">
<br>

<input type="text" name="cor" placeholder="Cor..." class="margem" required="">
<input type="text" name="escolaridade" placeholder="Escolaridade..." required="">
<br>

<input type="text" name="profissao" size="50" placeholder="Profissão..." required="">
<br>

<input type="text" name="rg" class="margem" placeholder="RG..." required="">
<input type="text" name="cpf" placeholder="CPF..." required="">
<br>

<input type="text" name="estadocivil" placeholder="Estado Civil..." size="50" required="" >
<br>

<input type="text" name="naturalidade" class="margem" placeholder="Naturalidade..." required="">
<input type="text" name="estado" placeholder="Estado..." required="">
<br>

<input type="text" name="nomepai" placeholder="Nome do pai..." class="margem" required="">
<input type="text" name="nacionalidadepai" placeholder="Nacionalidade...">
<br>

<input type="text" name="nomemae" placeholder="Nome da mãe..." class="margem" required="">
<input type="text" name="nacionalidademae" placeholder="Nacionalidade...">
<br>

<input type="text" name="contato" size="50" placeholder="Contatos (tel/cel)..." required="">
<br>
<input type="text" name="endereco" placeholder="Endereço..." class="margem" size="30" required="">
<input type="text" name="numEndereco" size="10" placeholder="Nº" required="">

<br>
<input type="text" name="complemento" class="margem" placeholder="Complemento..." required="">
<input type="text" name="bairro" placeholder="Bairro..." required="">
<br>

<input type="text" name="cep" placeholder="CEP..." size="50">
<br>
<input type="text" name="cidade" class="margem" placeholder="Cidade..." required="">
<input type="text" name="estado2" placeholder="Estado..." required="">


<br><br>
<input type="submit" value="Cadastrar" class="class2">
</form>
</div>
</body>
</html>