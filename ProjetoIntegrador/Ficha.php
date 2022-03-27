<?php
	$acao = 'recuperar_ficha';
	require 'cadastro_controller.php';
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

		<a href="index.php" class="class">Home </a> | 
		<a href="Usuarios.php" class="class">Usuarios Cadastrados </a> | 
		<a href="projeto.php" class="class">Cadastrar Novo </a> | 

</h3>
		<div class="estilo" style="margin-left: 20px;">
			<h1 align="center">Questionário</h1>

			<form action="cadastro_controller.php?acao=atualizar_ficha" method="POST">
				<table border="1" align="center">
					<tr>
						<td colspan="1" align="left">
							<label>Nome do Paciente: </label>
							<input type="text" name="nome" readonly="" size="50" value="<?=$registro[0]->nome?>">
						</td>
						<td colspan="1" align="left">
							<label>Cadastro: </label>
							<input type="text" name="cadastro" readonly="" size="50" value="<?=$registro[0]->id?>">
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left">
							<label>1) Queixa Principal: </label><br>
							<textarea name="queixa" readonly="" rows="5" cols="75" style="resize: none;"><?=$registro[0]->queixa?></textarea>
						</td>
						<td colspan="1" align="left">	
							<label>2) História da doença atual: </label><br>
							<textarea name="historia_doenca" readonly="" rows="5" cols="75" style="resize: none;"><?=$registro[0]->historia_doenca?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<label>3.1) Questionário de Saúde</label>
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="1">
							<label>1- Já teve hemorragia?</label>
							<input type="text" name="hemorragia" readonly="" value="<?=$registro[0]->hemorragia?>">
						</td>
						<td colspan="1">
							<label>2- Sofre(u) de alergia?</label>
							<input type="text" name="alergia" readonly="" value="<?=$registro[0]->alergia?>">
						</td>
					</tr>
					<tr>	
						<td colspan="1">
							<label>3- Teve reumatismo infeccioso?</label>
							<input type="text" name="reumatismoInfeccioso" readonly="" value="<?=$registro[0]->reumatismo_infeccioso?>">
						</td>
						<td colspan="1">
							<label>4- Sofre(u) de distúrbio cardiovascular?</label>
							<input type="text" name="disturbioCardiovascular" readonly="" value="<?=$registro[0]->disturbio_cardiovascular?>">
						</td>
					</tr>
					<tr></tr>
					<tr>						
						<td colspan="1">
							<label>5- Sofre(u) de gastrite?</label>
							<input type="text" name="gastrite" readonly="" value="<?=$registro[0]->gastrite?>">
						</td>
						<td colspan="1">
							<label>6- É diabético ou tem familiares diabéticos? </label>
							<input type="text" name="diabetico" readonly="" value="<?=$registro[0]->diabetico?>">
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="1">
							<label>7- Já desmaiou alguma vez?</label>
							<input type="text" name="desmaiou" readonly="" value="<?=$registro[0]->desmaiou?>">
						</td>
						<td>
							<label>8- Está sob tratamento médico?</label>
							<input type="text" name="sob_tratamento" readonly="" value="<?=$registro[0]->sob_tratamento?>">
						</td>
					</tr>
					<tr>	
						<td>
							<label>9- Está tomando algum medicamento?</label>
							<input type="text" name="tomandoMedicamento" readonly="" value="<?=$registro[0]->tomando_medicamento?>">
						</td>
						<td>
							<label>10- Esteve doente ou foi operado nos últimos 5 anos?</label>
							<input type="text" name="doenteOuOperado" readonly="" value="<?=$registro[0]->doente_ou_operado?>">
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>11- Tem hábitos, vícios ou manias?</label>
							<input type="text" name="habitos_vicios_manias" readonly="" value="<?=$registro[0]->habitos_vicios_manias?>">
						</td>
						<td>
							<label>12- Tem ansiedade/depressão?</label>
							<input type="text" name="ansiedade_depressao" readonly="" value="<?=$registro[0]->ansiedade_depressao?>">
							<br>
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="2">
							<label>13- Você e/ou algum familiar  teve algumas dessas doenças</label>
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>Tuberculose?</label>
							<input type="text" readonly="" name="tuberculose" value="<?=$registro[0]->tuberculose?>">
						</td>
						<td>
							<label>Sarampo?</label>
							<input type="text" readonly="" name="sarampo" value="<?=$registro[0]->sarampo?>">
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>Sífilis?</label>
							<input type="text" readonly="" name="sifilis" value="<?=$registro[0]->sifilis?>">
						</td>
						<td>
							<label>Caxumba?</label>
							<input type="text" readonly="" name="caxumba" value="<?=$registro[0]->caxumba?>">
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>Hepatite A, B, C?</label>
							<input type="text" readonly="" name="hepatite" value="<?=$registro[0]->hepatite?>">
						</td>
						<td>
							<label>Varicela?</label>
							<input type="text" readonly="" name="varicela" value="<?=$registro[0]->varicela?>">

						</td>
					</tr>
					<tr>
						<td>
							<label>SIDA/AIDS?</label>
							<input type="text" readonly="" name="aids" value="<?=$registro[0]->aids?>">
						</td>
						<td>
							<label>Outras: </label>
							<input type="text" readonly="" name="outras" value="<?=$registro[0]->outras_doencas?>">				
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>14- É fumante?</label>
							<input type="text" readonly="" name="fumante" value="<?=$registro[0]->fumante?>">
						</td>
						<td>
							<label>Frequência</label>
							<input type="text" readonly="" name="frequencia_fuma" value="<?=$registro[0]->frequencia_fuma?>">				
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="2">
							<label>3.2) Questionário complementar infantil - ODONTOPEDIATRIA</label>
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>1-	História da gestação: </label>
							<input type="text" readonly="" name="historia_gestacao" size="50" value="<?=$registro[0]->historia_gestacao?>">
						</td>
						<td>
							<label>2-	Nasceu de parto:</label>
							<input type="text" readonly="" name="parto" value="<?=$registro[0]->parto?>">
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>3-	A criança teve algum problema no parto?</label>
							<input type="text" readonly="" name="problemasParto" value="<?=$registro[0]->problema_parto?>">				
						</td>
						<td>
							<label>4-	A amamentação foi: </label>
							<input type="text" readonly="" name="amamentacao" value="<?=$registro[0]->amamentacao?>">
		
						</td>
					</tr>
					<tr></tr>
					<tr>	
						<td>
							<label>Até a idade de: </label>
							<input type="number" readonly="" name="amamentacao_idade" size="5" value="<?=$registro[0]->amamentacao_idade?>">
						</td>
						<td>
							<label>5-	Já lhe foi dito para não tomar anestesia local?</label>
							<input type="text" readonly="" name="anestesia" value="<?=$registro[0]->anestesia_local?>">
		
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>6-	Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</label>
							<input type="text" readonly="" name="doencagraveoucontagiosa" value="<?=$registro[0]->doenca_grave_ou_contagiosa?>">	
						</td>
						<td>
							<label>7-	A criança já foi vacinada?</label>
							<input type="text" readonly="" name="criancaVacinada" value="<?=$registro[0]->crianca_vacinada?>">	
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<label>CONDUTA DA CRIANÇA</label>
						</td>
					</tr>
					<tr>	
						<td>
							<label>Durante os 2 primeiros anos de vida:</label>
							<input type="text" readonly="" name="conduta_crianca" value="<?=$registro[0]->conduta_crianca?>">
						</td>
						<td>
							<label>No lar e na escola: teve alguma dificuldade no aprendizado?</label>
							<input type="text" readonly="" name="dificuldadeaprendizado" value="<?=$registro[0]->dificuldade_aprendizado?>">		
						</td>
					</tr>
					<tr>
						<td>
							<label>Estado anímico: </label>
							<input type="text" readonly="" name="estado_animico" value="<?=$registro[0]->estado_animico?>">
						</td>
						<td>
							<label>Tem sono: </label>
							<input type="text" readonly="" name="sono" value="<?=$registro[0]->sono?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Conduta psicomotora: </label>
							<input type="text" readonly="" name="condutapsicomotora" value="<?=$registro[0]->conduta_psicomotora?>">
						</td>
						<td>
							<label>Alimentação:</label>
							<input type="text" readonly="" name="alimentacao" value="<?=$registro[0]->alimentacao?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Sociabilidade:</label>
							<input type="text" readonly="" name="sociabilidade" value="<?=$registro[0]->sociabilidade?>">
						</td>
						<td>
							<label>Apresenta alguma patologia de conduta:</label>
							<input type="text" readonly="" name="patologia" value="<?=$registro[0]->patologia?>">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Observações:</label>
							<textarea rows="3" cols="125" readonly="" name="observacoes" style="resize: none;"><?=$registro[0]->observacoes?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>4) Exame Físico</label>
						</td>	
					</tr>
					<tr>
						<td>
							<label>Lábios: </label>
							<input type="text" readonly="" name="labio" value="<?=$registro[0]->labio?>">
						</td>
						<td>
							<label>Mucosa Alveolar: </label>
							<input type="text" readonly="" name="mucosaalveolar" value="<?=$registro[0]->mucosa_alveolar?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Mucosa Jugal: </label>
							<input type="text" readonly="" name="mucosajugal" value="<?=$registro[0]->mucosa_jugal?>">
						</td>
						<td>
							<label>Gengivas: </label>
							<input type="text" readonly="" name="gengivas" value="<?=$registro[0]->gengivas?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Língua: </label>
							<input type="text" readonly="" name="lingua" value="<?=$registro[0]->lingua?>">
						</td>
						<td>
							<label>Glândulas Salivares: </label>
							<input type="text" readonly="" name="glandulasalivar" value="<?=$registro[0]->glandula_salivar?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Soalho da Boca: </label>
							<input type="text" readonly="" name="soalhoboca" value="<?=$registro[0]->soalho_boca?>">
						</td>
						<td>
							<label>Linfonodos: </label>
							<input type="text" readonly="" name="linfonodos" value="<?=$registro[0]->linfonodos?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Palato Duro: </label>
							<input type="text" readonly="" name="palatoduro" value="<?=$registro[0]->palato_duro?>">
						</td>
						<td>
							<label>ATM: </label>
							<input type="text" readonly="" name="atm" value="<?=$registro[0]->atm?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Garganta: </label>
							<input type="text" readonly="" name="garganta" value="<?=$registro[0]->garganta?>">
						</td>
						<td>
							<label>Músculos Mastigadores: </label>
							<input type="text" readonly="" name="musculoMastigador" value="<?=$registro[0]->musculo_mastigador?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>Palato Mole: </label>
							<input type="text" readonly="" name="palatomole" value="<?=$registro[0]->palato_mole?>">
						</td>
						<td>
							<label>Oclusão: </label>
							<input type="text" readonly="" name="oclusao" value="<?=$registro[0]->oclusao?>">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Alterações encontradas:</label><br>
							<textarea rows="8" cols="125" readonly="" name="alteracoes" style="resize: none;"><?=$registro[0]->alteracoes_encontradas?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Pressão Arterial:</label><br>
							<label>Máxima: </label><input type="number" readonly="" name="pressaoArterialMax" value="<?=$registro[0]->pressao_arterial_max?>"><label>mmHG</label><br>
							<label>Mínima: </label><input type="number" readonly="" name="pressaoArterialMin" value="<?=$registro[0]->pressao_arterial_min?>"><label>mmHG</label><br>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Diagnóstico presuntivo: </label><br>
							<textarea rows="3" cols="125" readonly="" name="diagnosticopresuntivo" style="resize: none;"><?=$registro[0]->diagnostico_presuntivo?></textarea>
						</td>
					</tr>
					<tr>	
						<td colspan="2">
							<label>Exames complementares: </label><br>
							<textarea rows="3" cols="125" readonly="" name="examescomplementares" style="resize: none;"><?=$registro[0]->exames_complementares?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Diagnóstico definitivo: </label><br>
							<textarea rows="3" cols="125" readonly="" name="diagnosticodefinitivo" style="resize: none;"><?=$registro[0]->diagnostico_definitivo?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Tratamento/Proservação: </label><br>
							<textarea rows="3" cols="125" readonly="" name="tratamentoproservacao" style="resize: none;"><?=$registro[0]->tratamento_proservacao?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Plano de tratamento: </label><br>
							<textarea rows="10" cols="125" readonly="" name="plano_tratamento" style="resize: none;"><?=$registro[0]->plano_tratamento?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="1">
							<input type="text" readonly="" name="atendimento_urgencia" value="<?=$registro[0]->atendimento_urgencia?>">
							<label>Atendimento de Urgência (Estágio Sup. em Clínica Odontológica Integrada – URGÊNCIA)</label>
						</td>
						<td colspan="1">	
							<label>Medicação </label><br>
							<input type="text" readonly="" name="medicacao" value="<?=$registro[0]->medicacao?>"><label></label>
							<input type="text" readonly="" name="remedio" size="30" value="<?=$registro[0]->nome_medicacao?>"><br>
						</td>
					</tr>
					<tr>
						<td  colspan="2">
							<label>Nome do responsável: </label>
							<input type="text" readonly="" name="responsavel" class="margem"  size="30" value="<?=$registro[0]->nome_responsavel?>">
							
						
							<label>Aluno responsável: </label>
							<input type="text" readonly="" name="aluno_responsavel" class="margem" size="30" value="<?=$registro[0]->aluno_responsavel?>" >
						
						
							<label>Professor Responsável: </label>
							<input type="text" readonly="" name="professor_responsavel" class="margem" size="30" value="<?=$registro[0]->professor_responsavel?>">
						</td>
					</tr>
				</table>
				<input type="hidden" name="id" value="<?=$registro[0]->id?>">
			</form>
		</div>
	</body>
</html>