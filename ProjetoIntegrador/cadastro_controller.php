<?php


require_once 'cadastro.model.php';
require_once 'cadastro.service.php';
require_once 'conexao.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'inserir'){
	$cadastro = new Cadastro();
	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('data',$_POST['data']);
	$cadastro->__set('sexo',$_POST['sexo']);
	$cadastro->__set('peso',$_POST['peso']);
	$cadastro->__set('altura',$_POST['altura']);
	$cadastro->__set('cor',$_POST['cor']);
	$cadastro->__set('escolaridade',$_POST['escolaridade']);
	$cadastro->__set('profissao',$_POST['profissao']);
	$cadastro->__set('rg',$_POST['rg']);
	$cadastro->__set('cpf',$_POST['cpf']);
	$cadastro->__set('estadocivil',$_POST['estadocivil']);
	$cadastro->__set('naturalidade',$_POST['naturalidade']);
	$cadastro->__set('estado',$_POST['estado']);
	$cadastro->__set('nomepai',$_POST['nomepai']);
	$cadastro->__set('nacionalidadepai',$_POST['nacionalidadepai']);
	$cadastro->__set('nomemae',$_POST['nomemae']);
	$cadastro->__set('nacionalidademae',$_POST['nacionalidademae']);
	$cadastro->__set('contato',$_POST['contato']);
	$cadastro->__set('endereco',$_POST['endereco']);
	$cadastro->__set('numEndereco',$_POST['numEndereco']);
	$cadastro->__set('complemento',$_POST['complemento']);
	$cadastro->__set('bairro',$_POST['bairro']);
	$cadastro->__set('cep',$_POST['cep']);
	$cadastro->__set('cidade',$_POST['cidade']);
	$cadastro->__set('estado2',$_POST['estado2']);

	$conexao = new Conexao();

	$cadastroService = new cadastroService($conexao, $cadastro);

	$cadastroService->inserir();

	header('Location: Usuarios.php');

}else if($acao ==  'recuperar'){
	$cadastro = new Cadastro();
	$conexao = new Conexao();

	$cadastroService = new cadastroService($conexao, $cadastro);

	$cadastros = $cadastroService->recuperar();

}else if($acao == 'recuperar_um'){
	$cadastro = new Cadastro();
	$cadastro->__set('id',$_GET['id']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);
	
	$registro = $cadastroService->recuperar_um();

}else if($acao == 'recuperar_ficha'){
	$cadastro = new Cadastro();
	$cadastro->__set('id',$_GET['id']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);
	
	$registro = $cadastroService->recuperar_ficha();

}else if($acao == 'atualizar_ficha'){
	$cadastro = new Cadastro();
	
	$cadastro->__set('queixa',$_POST['queixa']);
	$cadastro->__set('historia_doenca',$_POST['historia_doenca']);
	$cadastro->__set('hemorragia',$_POST['hemorragia']);
	$cadastro->__set('alergia',$_POST['alergia']);
	$cadastro->__set('reumatismoInfeccioso',$_POST['reumatismoInfeccioso']);
	$cadastro->__set('disturbioCardiovascular',$_POST['disturbioCardiovascular']);
	$cadastro->__set('gastrite',$_POST['gastrite']);
	$cadastro->__set('diabetico',$_POST['diabetico']);
	$cadastro->__set('desmaiou',$_POST['desmaiou']);
	$cadastro->__set('sob_tratamento',$_POST['sob_tratamento']);
	$cadastro->__set('tomandoMedicamento',$_POST['tomandoMedicamento']);
	$cadastro->__set('doenteOuOperado',$_POST['doenteOuOperado']);
	$cadastro->__set('habitos_vicios_manias',$_POST['habitos_vicios_manias']);
	$cadastro->__set('ansiedade_depressao',$_POST['ansiedade_depressao']);
	$cadastro->__set('tuberculose',$_POST['tuberculose']);
	$cadastro->__set('sarampo',$_POST['sarampo']);
	$cadastro->__set('sifilis',$_POST['sifilis']);
	$cadastro->__set('caxumba',$_POST['caxumba']);
	$cadastro->__set('hepatite',$_POST['hepatite']);
	$cadastro->__set('varicela',$_POST['varicela']);
	$cadastro->__set('aids',$_POST['aids']);
	$cadastro->__set('outras',$_POST['outras']);
	$cadastro->__set('fumante',$_POST['fumante']);
	$cadastro->__set('frequencia_fuma',$_POST['frequencia_fuma']);
	$cadastro->__set('historia_gestacao',$_POST['historia_gestacao']);
	$cadastro->__set('parto',$_POST['parto']);
	$cadastro->__set('problemasParto',$_POST['problemasParto']);
	$cadastro->__set('amamentacao',$_POST['amamentacao']);
	$cadastro->__set('amamentacao_idade',$_POST['amamentacao_idade']);
	$cadastro->__set('anestesia',$_POST['anestesia']);
	$cadastro->__set('doencagraveoucontagiosa',$_POST['doencagraveoucontagiosa']);
	$cadastro->__set('criancaVacinada',$_POST['criancaVacinada']);
	$cadastro->__set('conduta_crianca',$_POST['conduta_crianca']);
	$cadastro->__set('dificuldadeaprendizado',$_POST['dificuldadeaprendizado']);
	$cadastro->__set('estado_animico',$_POST['estado_animico']);
	$cadastro->__set('sono',$_POST['sono']);
	$cadastro->__set('condutapsicomotora',$_POST['condutapsicomotora']);
	$cadastro->__set('alimentacao',$_POST['alimentacao']);
	$cadastro->__set('sociabilidade',$_POST['sociabilidade']);
	$cadastro->__set('patologia',$_POST['patologia']);
	$cadastro->__set('observacoes',$_POST['observacoes']);
	$cadastro->__set('labio',$_POST['labio']);
	$cadastro->__set('mucosaalveolar',$_POST['mucosaalveolar']);
	$cadastro->__set('mucosajugal',$_POST['mucosajugal']);
	$cadastro->__set('gengivas',$_POST['gengivas']);
	$cadastro->__set('lingua',$_POST['lingua']);
	$cadastro->__set('glandulasalivar',$_POST['glandulasalivar']);
	$cadastro->__set('soalhoboca',$_POST['soalhoboca']);
	$cadastro->__set('linfonodos',$_POST['linfonodos']);
	$cadastro->__set('palatoduro',$_POST['palatoduro']);
	$cadastro->__set('atm',$_POST['atm']);
	$cadastro->__set('garganta',$_POST['garganta']);
	$cadastro->__set('musculoMastigador',$_POST['musculoMastigador']);
	$cadastro->__set('palatomole',$_POST['palatomole']);
	$cadastro->__set('oclusao',$_POST['oclusao']);
	$cadastro->__set('alteracoes',$_POST['alteracoes']);
	$cadastro->__set('pressaoArterialMax',$_POST['pressaoArterialMax']);
	$cadastro->__set('pressaoArterialMin',$_POST['pressaoArterialMin']);
	$cadastro->__set('diagnosticopresuntivo',$_POST['diagnosticopresuntivo']);
	$cadastro->__set('examescomplementares',$_POST['examescomplementares']);
	$cadastro->__set('diagnosticodefinitivo',$_POST['diagnosticodefinitivo']);
	$cadastro->__set('tratamentoproservacao',$_POST['tratamentoproservacao']);
	$cadastro->__set('plano_tratamento',$_POST['plano_tratamento']);
	$cadastro->__set('atendimento_urgencia',$_POST['atendimento_urgencia']);
	$cadastro->__set('medicacao',$_POST['medicacao']);
	$cadastro->__set('remedio',$_POST['remedio']);
	$cadastro->__set('responsavel',$_POST['responsavel']);
	$cadastro->__set('aluno_responsavel',$_POST['aluno_responsavel']);
	$cadastro->__set('professor_responsavel',$_POST['professor_responsavel']);
	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('id',$_POST['id']);


	$conexao = new Conexao();
	$cadastroService = new cadastroService($conexao, $cadastro);

		if($cadastroService->atualizar_ficha()){
		header('Location: Usuarios.php');
	} else {echo 'erro';}


}else if($acao == 'recuperar_pront'){
	$cadastro = new Cadastro();
	$cadastro->__set('id',$_GET['id']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);

	$registro = $cadastroService->recuperar_pront();

}else if($acao == 'remover'){
	$cadastro = new Cadastro();
	$cadastro->__set('id',$_GET['id']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);

	$registro = $cadastroService->remover();
	header('Location: Usuarios.php');
}
else if($acao == 'atualizar'){

	$cadastro = new Cadastro();
	$cadastro->__set('id',$_POST['id']);
	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('cpf',$_POST['cpf']);
	$cadastro->__set('data',$_POST['data']);
	$cadastro->__set('sexo',$_POST['sexo']);
	$cadastro->__set('peso',$_POST['peso']);
	$cadastro->__set('altura',$_POST['altura']);
	$cadastro->__set('cor',$_POST['cor']);
	$cadastro->__set('escolaridade',$_POST['escolaridade']);
	$cadastro->__set('profissao',$_POST['profissao']);
	$cadastro->__set('rg',$_POST['rg']);
	$cadastro->__set('estadocivil',$_POST['estadocivil']);
	$cadastro->__set('naturalidade',$_POST['naturalidade']);
	$cadastro->__set('estado',$_POST['estado']);
	$cadastro->__set('nomepai',$_POST['nomepai']);
	$cadastro->__set('nacionalidadepai',$_POST['nacionalidadepai']);
	$cadastro->__set('nomemae',$_POST['nomemae']);
	$cadastro->__set('nacionalidademae',$_POST['nacionalidademae']);
	$cadastro->__set('contato',$_POST['contato']);
	$cadastro->__set('endereco',$_POST['endereco']);
	$cadastro->__set('numEndereco',$_POST['numEndereco']);
	$cadastro->__set('complemento',$_POST['complemento']);
	$cadastro->__set('bairro',$_POST['bairro']);
	$cadastro->__set('cep',$_POST['cep']);
	$cadastro->__set('cidade',$_POST['cidade']);
	$cadastro->__set('estado2',$_POST['estado2']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao,$cadastro);
	if($cadastroService->atualizar()){
		header('Location: Usuarios.php');
	} else {echo 'erro';}
}
else if($acao == 'atualizar_pront'){

	$cadastro = new Cadastro();
	$cadastro->__set('id',$_POST['id']);
	$cadastro->__set('consulta',$_POST['consulta']);

	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao,$cadastro);
	if($cadastroService->atualizar_pront()){
		header('Location: Usuarios.php');
	} else {echo 'erro';}
}
?>