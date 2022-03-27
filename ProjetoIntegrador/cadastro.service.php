<?php
class CadastroService{
	private $conexao;
	private $cadastro;

	public function __construct(Conexao $conexao, Cadastro $cadastro){
		$this->conexao = $conexao->conectar();
		$this->cadastro = $cadastro;
	}

	public function inserir(){
		$query = 'insert into usuarios(nome,data_nasc,sexo,peso,altura,cor,escolaridade,profissao,RG,CPF,estado_civil,naturalidade,estado,nome_pai,nacionalidade_pai,nome_mae,nacionalidade_mae,contato,endereco,numEndereco,complemento,bairro,cep,cidade,estado2)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->cadastro->__get('nome'));
		$stmt->bindValue(2,$this->cadastro->__get('data'));
		$stmt->bindValue(3,$this->cadastro->__get('sexo'));
		$stmt->bindValue(4,$this->cadastro->__get('peso'));
		$stmt->bindValue(5,$this->cadastro->__get('altura'));
		$stmt->bindValue(6,$this->cadastro->__get('cor'));
		$stmt->bindValue(7,$this->cadastro->__get('escolaridade'));
		$stmt->bindValue(8,$this->cadastro->__get('profissao'));
		$stmt->bindValue(9,$this->cadastro->__get('rg'));
		$stmt->bindValue(10,$this->cadastro->__get('cpf'));
		$stmt->bindValue(11,$this->cadastro->__get('estadocivil'));
		$stmt->bindValue(12,$this->cadastro->__get('naturalidade'));
		$stmt->bindValue(13,$this->cadastro->__get('estado'));
		$stmt->bindValue(14,$this->cadastro->__get('nomepai'));
		$stmt->bindValue(15,$this->cadastro->__get('nacionalidadepai'));
		$stmt->bindValue(16,$this->cadastro->__get('nomemae'));
		$stmt->bindValue(17,$this->cadastro->__get('nacionalidademae'));
		$stmt->bindValue(18,$this->cadastro->__get('contato'));
		$stmt->bindValue(19,$this->cadastro->__get('endereco'));
		$stmt->bindValue(20,$this->cadastro->__get('numEndereco'));
		$stmt->bindValue(21,$this->cadastro->__get('complemento'));
		$stmt->bindValue(22,$this->cadastro->__get('bairro'));
		$stmt->bindValue(23,$this->cadastro->__get('cep'));
		$stmt->bindValue(24,$this->cadastro->__get('cidade'));
		$stmt->bindValue(25,$this->cadastro->__get('estado2'));
		$stmt->execute();
	}
    public function inserir_ficha(){
    	$query = 'insert into usuarios(queixa,hemorragia,alergia,reumatismo_infeccioso,disturbio_cardiovascular,gastrite,diabetico,desmaiou,sob_tratamento,tomando_medicamento,doente_ou_operado,habitos_vicios_manias,ansiedade_depressao,tuberculose,sarampo,sifilis,caxumba,hepatite,varicela,aids,outras_doencas,fumante,frequencia_fuma,historia_gestacao,parto,problema_parto,amamentacao,amamentacao_idade,anestesia_local,doenca_grave_ou_contagiosa,crianca_vacinada,conduta_crianca,dificuldade_aprendizado,estado_animico,sono,conduta_psicomotora,alimentacao,sociabilidade,patologia,observacoes,labio,mucosa_alveolar,mucosa_jugal,gengivas,lingua,glandula_salivar,soalho_boca,linfonodos,palato_duro,atm,garganta,musculo_mastigador,palato_mole,oclusao,alteracoes_encontradas,pressao_arterial_max,pressao_arterial_min,diagnostico_presuntivo,exames_complementares,diagnostico_definitivo,tratamento_proservacao,plano_tratamento,atendimento_urgencia,medicacao,nome_medicacao,nome_responsavel,aluno_responsavel,professor_responsavel)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    	$stmt = $this->conexao->prepare($query);
    	$stmt->bindValue(1,$this->cadastro->__get('queixa'));
    	$stmt->bindValue(2,$this->cadastro->__get('hemorragia'));
    	$stmt->bindValue(3,$this->cadastro->__get('alergia'));
    	$stmt->bindValue(4,$this->cadastro->__get('reumatismoInfeccioso'));
    	$stmt->bindValue(5,$this->cadastro->__get('disturbioCardiovascular'));
    	$stmt->bindValue(6,$this->cadastro->__get('gastrite'));
    	$stmt->bindValue(7,$this->cadastro->__get('diabetico'));
    	$stmt->bindValue(8,$this->cadastro->__get('desmaiou'));
    	$stmt->bindValue(9,$this->cadastro->__get('sob_tratamento'));
    	$stmt->bindValue(10,$this->cadastro->__get('tomandoMedicamento'));
    	$stmt->bindValue(11,$this->cadastro->__get('doenteOuOperado'));
    	$stmt->bindValue(12,$this->cadastro->__get('habitos_vicios_manias'));
    	$stmt->bindValue(13,$this->cadastro->__get('ansiedade_depressao'));
    	$stmt->bindValue(14,$this->cadastro->__get('tuberculose'));
    	$stmt->bindValue(15,$this->cadastro->__get('sarampo'));
    	$stmt->bindValue(16,$this->cadastro->__get('sifilis'));
    	$stmt->bindValue(17,$this->cadastro->__get('caxumba'));
    	$stmt->bindValue(18,$this->cadastro->__get('hepatite'));
    	$stmt->bindValue(19,$this->cadastro->__get('varicela'));
    	$stmt->bindValue(20,$this->cadastro->__get('aids'));
    	$stmt->bindValue(21,$this->cadastro->__get('outras'));
    	$stmt->bindValue(22,$this->cadastro->__get('fumante'));
    	$stmt->bindValue(23,$this->cadastro->__get('frequencia_fuma'));
    	$stmt->bindValue(24,$this->cadastro->__get('historia_gestacao'));
    	$stmt->bindValue(25,$this->cadastro->__get('parto'));
    	$stmt->bindValue(26,$this->cadastro->__get('problemasParto'));
    	$stmt->bindValue(27,$this->cadastro->__get('amamentacao'));
    	$stmt->bindValue(28,$this->cadastro->__get('amamentacao_idade'));
    	$stmt->bindValue(29,$this->cadastro->__get('anestesia'));
    	$stmt->bindValue(30,$this->cadastro->__get('doencagraveoucontagiosa'));
    	$stmt->bindValue(31,$this->cadastro->__get('criancaVacinada'));
    	$stmt->bindValue(32,$this->cadastro->__get('conduta_crianca'));
    	$stmt->bindValue(33,$this->cadastro->__get('dificuldadeaprendizado'));
    	$stmt->bindValue(34,$this->cadastro->__get('estado_animico'));
    	$stmt->bindValue(35,$this->cadastro->__get('sono'));
    	$stmt->bindValue(36,$this->cadastro->__get('condutapsicomotora'));
    	$stmt->bindValue(37,$this->cadastro->__get('alimentacao'));
    	$stmt->bindValue(38,$this->cadastro->__get('sociabilidade'));
    	$stmt->bindValue(39,$this->cadastro->__get('patologia'));
    	$stmt->bindValue(40,$this->cadastro->__get('observacoes'));
    	$stmt->bindValue(41,$this->cadastro->__get('labio'));
    	$stmt->bindValue(42,$this->cadastro->__get('mucosaalveolar'));
    	$stmt->bindValue(43,$this->cadastro->__get('mucosajugal'));
    	$stmt->bindValue(44,$this->cadastro->__get('gengivas'));
    	$stmt->bindValue(45,$this->cadastro->__get('lingua'));
    	$stmt->bindValue(46,$this->cadastro->__get('glandulasalivar'));
    	$stmt->bindValue(47,$this->cadastro->__get('soalhoboca'));
    	$stmt->bindValue(48,$this->cadastro->__get('linfonodos'));
    	$stmt->bindValue(49,$this->cadastro->__get('palatoduro'));
    	$stmt->bindValue(50,$this->cadastro->__get('atm'));
    	$stmt->bindValue(51,$this->cadastro->__get('garganta'));
    	$stmt->bindValue(52,$this->cadastro->__get('musculoMastigador'));
    	$stmt->bindValue(53,$this->cadastro->__get('palatomole'));
    	$stmt->bindValue(54,$this->cadastro->__get('oclusao'));
    	$stmt->bindValue(55,$this->cadastro->__get('alteracoes'));
    	$stmt->bindValue(56,$this->cadastro->__get('pressaoArterialMax'));
    	$stmt->bindValue(57,$this->cadastro->__get('pressaoArterialMin'));
    	$stmt->bindValue(58,$this->cadastro->__get('diagnosticopresuntivo'));
    	$stmt->bindValue(59,$this->cadastro->__get('examescomplementares'));
    	$stmt->bindValue(60,$this->cadastro->__get('diagnosticodefinitivo'));
    	$stmt->bindValue(61,$this->cadastro->__get('tratamentoproservacao'));
    	$stmt->bindValue(62,$this->cadastro->__get('plano_tratamento'));
    	$stmt->bindValue(63,$this->cadastro->__get('atendimento_urgencia'));
    	$stmt->bindValue(64,$this->cadastro->__get('medicacao'));
    	$stmt->bindValue(65,$this->cadastro->__get('remedio'));
    	$stmt->bindValue(66,$this->cadastro->__get('responsavel'));
    	$stmt->bindValue(67,$this->cadastro->__get('aluno_responsavel'));
    	$stmt->bindValue(68,$this->cadastro->__get('professor_responsavel'));
    	$stmt->execute();
    }
	public function recuperar(){
		$query = 'select id,nome,cpf from usuarios';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
        if($stmt->rowCount()==0){
            header('Location:404.php');
            die();
        }
        else{
		return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
	}

	public function recuperar_um(){
		$query = 'select id,nome,cpf,data_nasc,sexo,peso,altura,cor,escolaridade,profissao,rg,estado_civil,naturalidade,estado,nome_pai,nacionalidade_pai,nome_mae,nacionalidade_mae,contato,endereco,numEndereco,complemento,bairro,cep,cidade,estado2 from usuarios where id = ?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->cadastro->__get('id'));
		$stmt->execute();
        if($stmt->rowCount()==0){
            header('Location:404.php');
            die();
        }
        else{
		return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

	public function atualizar(){
		$query = 'update usuarios set nome = ?,cpf = ?,data_nasc = ?,sexo = ?,peso = ?,altura = ?,cor = ?,escolaridade = ?,profissao = ?,rg = ?,estado_civil = ?,naturalidade = ?,estado = ?,nome_pai = ?,nacionalidade_pai = ?,nome_mae = ?,nacionalidade_mae = ?,contato = ?,endereco = ?,numEndereco = ?,complemento = ?,bairro = ?,cep = ?,cidade = ?,estado2 = ? where id = ?';
		$stmt = $this->conexao->prepare($query);		
		$stmt->bindValue(1, $this->cadastro->__get('nome'));
		$stmt->bindValue(2, $this->cadastro->__get('cpf'));
		$stmt->bindValue(3, $this->cadastro->__get('data'));
		$stmt->bindValue(4, $this->cadastro->__get('sexo'));
		$stmt->bindValue(5, $this->cadastro->__get('peso'));
		$stmt->bindValue(6, $this->cadastro->__get('altura'));
		$stmt->bindValue(7, $this->cadastro->__get('cor'));
		$stmt->bindValue(8, $this->cadastro->__get('escolaridade'));
		$stmt->bindValue(9, $this->cadastro->__get('profissao'));
		$stmt->bindValue(10, $this->cadastro->__get('rg'));
		$stmt->bindValue(11, $this->cadastro->__get('estadocivil'));
		$stmt->bindValue(12, $this->cadastro->__get('naturalidade'));
		$stmt->bindValue(13, $this->cadastro->__get('estado'));
		$stmt->bindValue(14,$this->cadastro->__get('nomepai'));
		$stmt->bindValue(15,$this->cadastro->__get('nacionalidadepai'));
		$stmt->bindValue(16,$this->cadastro->__get('nomemae'));
		$stmt->bindValue(17,$this->cadastro->__get('nacionalidademae'));
		$stmt->bindValue(18,$this->cadastro->__get('contato'));
		$stmt->bindValue(19,$this->cadastro->__get('endereco'));
		$stmt->bindValue(20,$this->cadastro->__get('numEndereco'));
		$stmt->bindValue(21,$this->cadastro->__get('complemento'));
		$stmt->bindValue(22,$this->cadastro->__get('bairro'));
		$stmt->bindValue(23,$this->cadastro->__get('cep'));
		$stmt->bindValue(24,$this->cadastro->__get('cidade'));
		$stmt->bindValue(25,$this->cadastro->__get('estado2'));
		$stmt->bindValue(26, $this->cadastro->__get('id'));
		return $stmt->execute();	
	}
	public function recuperar_ficha(){
		$query = 'select id,nome,queixa,historia_doenca,hemorragia,alergia,reumatismo_infeccioso,disturbio_cardiovascular,gastrite,diabetico,desmaiou,sob_tratamento,tomando_medicamento,doente_ou_operado,habitos_vicios_manias,ansiedade_depressao,tuberculose,sarampo,sifilis,caxumba,hepatite,varicela,aids,outras_doencas,fumante,frequencia_fuma,historia_gestacao,parto,problema_parto,amamentacao,amamentacao_idade,anestesia_local,doenca_grave_ou_contagiosa,crianca_vacinada,conduta_crianca,dificuldade_aprendizado,estado_animico,sono,conduta_psicomotora,alimentacao,sociabilidade,patologia,observacoes,labio,mucosa_alveolar,mucosa_jugal,gengivas,lingua,glandula_salivar,soalho_boca,linfonodos,palato_duro,atm,garganta,musculo_mastigador,palato_mole,oclusao,alteracoes_encontradas,pressao_arterial_max,pressao_arterial_min,diagnostico_presuntivo,exames_complementares,diagnostico_definitivo,tratamento_proservacao,plano_tratamento,atendimento_urgencia,medicacao,nome_medicacao,nome_responsavel,aluno_responsavel,professor_responsavel from usuarios where id = ?';
		$stmt = $this->conexao->prepare($query);
    	$stmt->bindValue(1,$this->cadastro->__get('id'));
		$stmt->execute();
        if($stmt->rowCount()==0){
            header('Location:404.php');}
        else{
		return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
	}
		public function recuperar_pront(){
		$query = 'select id,nome,consulta from usuarios where id = ?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->cadastro->__get('id'));
		$stmt->execute();
        if($stmt->rowCount()==0){
            header('Location:404.php');
            die();
        }
        else{
		return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
	}
	public function atualizar_pront(){
	$query = 'update usuarios set consulta = ? where id = ?';
	$stmt = $this->conexao->prepare($query);
	$stmt->bindValue(1, $this->cadastro->__get('consulta'));
	$stmt->bindValue(2, $this->cadastro->__get('id'));
	return $stmt->execute();	
	}
	public function atualizar_ficha(){
	$query = 'update usuarios set queixa = ?,hemorragia = ?,alergia = ?,reumatismo_infeccioso = ?,disturbio_cardiovascular = ?,gastrite = ?,diabetico = ?,desmaiou = ?,sob_tratamento = ?,tomando_medicamento = ?,doente_ou_operado = ?,habitos_vicios_manias = ?,ansiedade_depressao = ?,tuberculose = ?,sarampo = ?,sifilis = ?,caxumba = ?,hepatite = ?,varicela = ?,aids = ?,outras_doencas = ?,fumante = ?,frequencia_fuma = ?,historia_gestacao = ?,parto = ?,problema_parto = ?,amamentacao = ?,amamentacao_idade = ?,anestesia_local = ?,doenca_grave_ou_contagiosa = ?,crianca_vacinada = ?,conduta_crianca = ?,dificuldade_aprendizado = ?,estado_animico = ?,sono = ?,conduta_psicomotora = ?,alimentacao = ?,sociabilidade = ?,patologia = ?,observacoes = ?,labio = ?,mucosa_alveolar = ?,mucosa_jugal = ?,gengivas = ?,lingua = ?,glandula_salivar = ?,soalho_boca = ?,linfonodos = ?,palato_duro = ?,atm = ?,garganta = ?,musculo_mastigador = ?,palato_mole = ?,oclusao = ?,alteracoes_encontradas = ?,pressao_arterial_max = ?,pressao_arterial_min = ?,diagnostico_presuntivo = ?,exames_complementares = ?,diagnostico_definitivo = ?,tratamento_proservacao = ?,plano_tratamento = ?,atendimento_urgencia = ?,medicacao = ?,nome_medicacao = ?,nome_responsavel = ?,aluno_responsavel = ?,professor_responsavel = ?,nome = ?,historia_doenca = ? where id = ?';
	$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,$this->cadastro->__get('queixa'));
    	$stmt->bindValue(2,$this->cadastro->__get('hemorragia'));
    	$stmt->bindValue(3,$this->cadastro->__get('alergia'));
    	$stmt->bindValue(4,$this->cadastro->__get('reumatismoInfeccioso'));
    	$stmt->bindValue(5,$this->cadastro->__get('disturbioCardiovascular'));
    	$stmt->bindValue(6,$this->cadastro->__get('gastrite'));
    	$stmt->bindValue(7,$this->cadastro->__get('diabetico'));
    	$stmt->bindValue(8,$this->cadastro->__get('desmaiou'));
    	$stmt->bindValue(9,$this->cadastro->__get('sob_tratamento'));
    	$stmt->bindValue(10,$this->cadastro->__get('tomandoMedicamento'));
    	$stmt->bindValue(11,$this->cadastro->__get('doenteOuOperado'));
    	$stmt->bindValue(12,$this->cadastro->__get('habitos_vicios_manias'));
    	$stmt->bindValue(13,$this->cadastro->__get('ansiedade_depressao'));
    	$stmt->bindValue(14,$this->cadastro->__get('tuberculose'));
    	$stmt->bindValue(15,$this->cadastro->__get('sarampo'));
    	$stmt->bindValue(16,$this->cadastro->__get('sifilis'));
    	$stmt->bindValue(17,$this->cadastro->__get('caxumba'));
    	$stmt->bindValue(18,$this->cadastro->__get('hepatite'));
    	$stmt->bindValue(19,$this->cadastro->__get('varicela'));
    	$stmt->bindValue(20,$this->cadastro->__get('aids'));
    	$stmt->bindValue(21,$this->cadastro->__get('outras'));
    	$stmt->bindValue(22,$this->cadastro->__get('fumante'));
    	$stmt->bindValue(23,$this->cadastro->__get('frequencia_fuma'));
    	$stmt->bindValue(24,$this->cadastro->__get('historia_gestacao'));
    	$stmt->bindValue(25,$this->cadastro->__get('parto'));
    	$stmt->bindValue(26,$this->cadastro->__get('problemasParto'));
    	$stmt->bindValue(27,$this->cadastro->__get('amamentacao'));
    	$stmt->bindValue(28,$this->cadastro->__get('amamentacao_idade'));
    	$stmt->bindValue(29,$this->cadastro->__get('anestesia'));
    	$stmt->bindValue(30,$this->cadastro->__get('doencagraveoucontagiosa'));
    	$stmt->bindValue(31,$this->cadastro->__get('criancaVacinada'));
    	$stmt->bindValue(32,$this->cadastro->__get('conduta_crianca'));
    	$stmt->bindValue(33,$this->cadastro->__get('dificuldadeaprendizado'));
    	$stmt->bindValue(34,$this->cadastro->__get('estado_animico'));
    	$stmt->bindValue(35,$this->cadastro->__get('sono'));
    	$stmt->bindValue(36,$this->cadastro->__get('condutapsicomotora'));
    	$stmt->bindValue(37,$this->cadastro->__get('alimentacao'));
    	$stmt->bindValue(38,$this->cadastro->__get('sociabilidade'));
    	$stmt->bindValue(39,$this->cadastro->__get('patologia'));
    	$stmt->bindValue(40,$this->cadastro->__get('observacoes'));
    	$stmt->bindValue(41,$this->cadastro->__get('labio'));
    	$stmt->bindValue(42,$this->cadastro->__get('mucosaalveolar'));
    	$stmt->bindValue(43,$this->cadastro->__get('mucosajugal'));
    	$stmt->bindValue(44,$this->cadastro->__get('gengivas'));
    	$stmt->bindValue(45,$this->cadastro->__get('lingua'));
    	$stmt->bindValue(46,$this->cadastro->__get('glandulasalivar'));
    	$stmt->bindValue(47,$this->cadastro->__get('soalhoboca'));
    	$stmt->bindValue(48,$this->cadastro->__get('linfonodos'));
    	$stmt->bindValue(49,$this->cadastro->__get('palatoduro'));
    	$stmt->bindValue(50,$this->cadastro->__get('atm'));
    	$stmt->bindValue(51,$this->cadastro->__get('garganta'));
    	$stmt->bindValue(52,$this->cadastro->__get('musculoMastigador'));
    	$stmt->bindValue(53,$this->cadastro->__get('palatomole'));
    	$stmt->bindValue(54,$this->cadastro->__get('oclusao'));
    	$stmt->bindValue(55,$this->cadastro->__get('alteracoes'));
    	$stmt->bindValue(56,$this->cadastro->__get('pressaoArterialMax'));
    	$stmt->bindValue(57,$this->cadastro->__get('pressaoArterialMin'));
    	$stmt->bindValue(58,$this->cadastro->__get('diagnosticopresuntivo'));
    	$stmt->bindValue(59,$this->cadastro->__get('examescomplementares'));
    	$stmt->bindValue(60,$this->cadastro->__get('diagnosticodefinitivo'));
    	$stmt->bindValue(61,$this->cadastro->__get('tratamentoproservacao'));
    	$stmt->bindValue(62,$this->cadastro->__get('plano_tratamento'));
    	$stmt->bindValue(63,$this->cadastro->__get('atendimento_urgencia'));
    	$stmt->bindValue(64,$this->cadastro->__get('medicacao'));
    	$stmt->bindValue(65,$this->cadastro->__get('remedio'));
    	$stmt->bindValue(66,$this->cadastro->__get('responsavel'));
    	$stmt->bindValue(67,$this->cadastro->__get('aluno_responsavel'));
    	$stmt->bindValue(68,$this->cadastro->__get('professor_responsavel'));
    	$stmt->bindValue(69, $this->cadastro->__get('nome'));
    	$stmt->bindValue(70,$this->cadastro->__get('historia_doenca'));
    	$stmt->bindValue(71, $this->cadastro->__get('id'));
	return $stmt->execute();	
	}
	public function remover(){
		$query = 'delete from usuarios where id = ?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->cadastro->__get('id'));
		return $stmt->execute();
	}
}
?>