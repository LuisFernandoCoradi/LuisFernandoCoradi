<?php
session_start();
include("conexao.php");
$nome = filter_input(INPUT_POST, 'nome');
$sexo = filter_input(INPUT_POST, 'sexo');
$data = filter_input(INPUT_POST,'data');
$peso = filter_input(INPUT_POST, 'peso');
$altura = filter_input(INPUT_POST, 'altura');
$cor = filter_input(INPUT_POST, 'cor');
$escolaridade = filter_input(INPUT_POST, 'escolaridade');
$profissao = filter_input(INPUT_POST, 'profissao');
$rg = filter_input(INPUT_POST, 'rg');
$cpf = filter_input(INPUT_POST, 'cpf');
$estadocivil = filter_input(INPUT_POST, 'estadocivil');
$naturalidade = filter_input(INPUT_POST, 'naturalidade');
$estado = filter_input(INPUT_POST, 'estado');
$nomepai = filter_input(INPUT_POST, 'nomepai');
$nacionalidadepai = filter_input(INPUT_POST, 'nacionalidadepai');
$nomemae = filter_input(INPUT_POST, 'nomemae');
$nacionalidademae = filter_input(INPUT_POST, 'nacionalidademae');
$contato = filter_input(INPUT_POST, 'contato');
$endereco = filter_input(INPUT_POST, 'endereco');

$result_usuarios ="INSERT INTO usuarios (nome,sexo,data_nasc,peso,altura,cor,escolaridade,profissao,RG,CPF,estado_civil,Naturalidade,Estado,nome_pai,nacionalidade_pai,nome_mae,nacionalidade_mae,contato,Endereco) 
values('$nome','$sexo','$data','$peso','$altura','$cor','$escolaridade','$profissao','$rg','$cpf','$estadocivil','$naturalidade','$estado','$nomepai','$nacionalidadepai','$nomemae',
'$nacionalidademae','$contato','$endereco')";
$resultado_usuario = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green'>Usuário cadastrado </p>";
	header("Location: Projeto.php");
}
else{
	$_SESSION['msg'] = "<p style='color:red'>Não foi possível cadastrar o usuário</p>";
	header("Location: Projeto.php");
}

?>