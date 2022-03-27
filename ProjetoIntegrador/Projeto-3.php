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
				<table border="1" align="left">
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
							<textarea name="queixa" rows="5" cols="75" style="resize: none;"></textarea>
						</td>
						<td colspan="1" align="left">	
							<label>2) História da doença atual: </label><br>
							<textarea name="historia_doenca" rows="5" cols="75" style="resize: none;"></textarea>
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
							<input type="radio" name="hemorragia" value="sim" required="">Sim
							<input type="radio" name="hemorragia" value="nao">Não
						</td>
						<td colspan="1">
							<label>2- Sofre(u) de alergia?</label>
							<input type="radio" name="alergia" value="sim">Sim
							<input type="radio" name="alergia" value="nao">Não
						</td>
					</tr>
					<tr>	
						<td colspan="1">
							<label>3- Teve reumatismo infeccioso?</label>
							<input type="radio" name="reumatismoInfeccioso" value="sim">Sim
							<input type="radio" name="reumatismoInfeccioso" value="nao">Não
						</td>
						<td colspan="1">
							<label>4- Sofre(u) de distúrbio cardiovascular?</label>
							<input type="radio" name="disturbioCardiovascular" value="sim">Sim
							<input type="radio" name="disturbioCardiovascular" value="nao">Não
						</td>
					</tr>
					<tr></tr>
					<tr>						
						<td colspan="1">
							<label>5- Sofre(u) de gastrite?</label>
							<input type="radio" name="gastrite" value="sim">Sim
							<input type="radio" name="gastrite" value="nao">Não
						</td>
						<td colspan="1">
							<label>6- É diabético ou tem familiares diabéticos? </label>
							<input type="radio" name="diabetico" value="sim">Sim
							<input type="radio" name="diabetico" value="nao">Não
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="1">
							<label>7- Já desmaiou alguma vez?</label>
							<input type="radio" name="desmaiou" value="sim">Sim
							<input type="radio" name="desmaiou" value="nao">Não
						</td>
						<td>
							<label>8- Está sob tratamento médico?</label>
							<input type="radio" name="sob_tratamento" value="sim">Sim
							<input type="radio" name="sob_tratamento" value="nao">Não
						</td>
					</tr>
					<tr>	
						<td>
							<label>9- Está tomando algum medicamento?</label>
							<input type="radio" name="tomandoMedicamento" value="sim">Sim
							<input type="radio" name="tomandoMedicamento" value="nao">Não
						</td>
						<td>
							<label>10- Esteve doente ou foi operado nos últimos 5 anos?</label>
							<input type="radio" name="doenteOuOperado" value="sim">Sim
							<input type="radio" name="doenteOuOperado" value="nao">Não
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>11- Tem hábitos, vícios ou manias?</label>
							<input type="radio" name="habitos_vicios_manias" value="sim">Sim
							<input type="radio" name="habitos_vicios_manias" value="nao">Não
						</td>
						<td>
							<label>12- Tem ansiedade/depressão?</label>
							<input type="radio" name="ansiedade_depressao" value="sim">Sim
							<input type="radio" name="ansiedade_depressao" value="nao">Não
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
							<input type="radio" name="tuberculose" value="sim">Sim
							<input type="radio" name="tuberculose" value="nao">Não
						</td>
						<td>
							<label>Sarampo?</label>
							<input type="radio" name="sarampo" value="sim">Sim
							<input type="radio" name="sarampo" value="nao">Não
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>Sífilis?</label>
							<input type="radio" name="sifilis" value="sim">Sim
							<input type="radio" name="sifilis" value="nao">Não
						</td>
						<td>
							<label>Caxumba?</label>
							<input type="radio" name="caxumba" value="sim">Sim
							<input type="radio" name="caxumba" value="nao">Não
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>Hepatite A, B, C?</label>
							<input type="radio" name="hepatite" value="sim">Sim
							<input type="radio" name="hepatite" value="nao">Não
						</td>
						<td>
							<label>Varicela?</label>
							<input type="radio" name="varicela" value="sim">Sim
							<input type="radio" name="varicela" value="nao">Não
						</td>
					</tr>
					<tr>
						<td>
							<label>SIDA/AIDS?</label>
							<input type="radio" name="aids" value="sim">Sim
							<input type="radio" name="aids" value="nao">Não
						</td>
						<td>
							<label>Outras: </label>
							<input type="text" name="outras">				
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>14- É fumante?</label>
							<input type="radio" name="fumante" value="sim">Sim
							<input type="radio" name="fumante" value="nao">Não
						</td>
						<td>
							<label>Frequência</label>
							<input type="text" name="frequencia_fuma">				
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
							<input type="text" name="historia_gestacao" size="50">
						</td>
						<td>
							<label>2-	Nasceu de parto:</label>
							<input type="radio" name="parto" value="normal">Normal
							<input type="radio" name="parto" value="cesariana">Cesariana
							<input type="radio" name="parto" value="forceps">Fórceps
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>3-	A criança teve algum problema no parto?</label>
							<input type="radio" name="problemasParto" value="sim">Sim
							<input type="radio" name="problemasParto" value="nao">Não				
						</td>
						<td>
							<label>4-	A amamentação foi: </label>
							<input type="radio" name="amamentacao" value="natural">Natural
							<input type="radio" name="amamentacao" value="mamadeira">Mamadeira		
						</td>
					</tr>
					<tr></tr>
					<tr>	
						<td>
							<label>Até a idade de: </label>
							<input type="number" name="amamentacao_idade" size="5">
						</td>
						<td>
							<label>5-	Já lhe foi dito para não tomar anestesia local?</label>
							<input type="radio" name="anestesia" value="sim">Sim
							<input type="radio" name="anestesia" value="nao">Não		
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td>
							<label>6-	Já teve ou viveu com alguém que tivesse doença grave e contagiosa?</label>
							<input type="radio" name="doencagraveoucontagiosa" value="sim">Sim
							<input type="radio" name="doencagraveoucontagiosa" value="nao">Não		
						</td>
						<td>
							<label>7-	A criança já foi vacinada?</label>
							<input type="radio" name="criancaVacinada" value="sim">Sim
							<input type="radio" name="criancaVacinada" value="nao">Não		
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
							<input type="radio" name="conduta_crianca" value="sentou-se">Sentou-se
							<input type="radio" name="conduta_crianca" value="engatinhou">Engatinhou	
							<input type="radio" name="conduta_crianca" value="andou">Andou
							<input type="radio" name="conduta_crianca" value="falou">Falou	
						</td>
						<td>
							<label>No lar e na escola: teve alguma dificuldade no aprendizado?</label>
							<input type="radio" name="dificuldadeaprendizado" value="sim">Sim
							<input type="radio" name="dificuldadeaprendizado" value="nao">Não		
						</td>
					</tr>
					<tr>
						<td>
							<label>Estado anímico: </label>
							<input type="radio" name="estado_animico" value="Alegre">Alegre
							<input type="radio" name="estado_animico" value="Triste">Triste	
							<input type="radio" name="estado_animico" value="Tímido">Tímido
							<input type="radio" name="estado_animico" value="Tranquilo">Tranquilo
							<input type="radio" name="estado_animico" value="Inquieto">Inquieto
							<input type="radio" name="estado_animico" value="Assustado">Assustado	
						</td>
						<td>
							<label>Tem sono: </label>
							<input type="radio" name="sono" value="tranquilo">Tranquilo
							<input type="radio" name="sono" value="intranquilo">Intranquilo
							<input type="radio" name="sono" value="terrornoturno">Terror Noturno
							<input type="radio" name="sono" value="pesadelos">Pesadelos
							<input type="radio" name="sono" value="sonambulismo">Sonambulismo
							<input type="radio" name="sono" value="insonia">Insônia
						</td>
					</tr>
					<tr>
						<td>
							<label>Conduta psicomotora: </label>
							<input type="radio" name="condutapsicomotora" value="normal">Postura Normal
							<input type="radio" name="condutapsicomotora" value="alterada">Postura Alterada
							<input type="radio" name="condutapsicomotora" value="fonacao normal">Fonação Normal
							<input type="radio" name="condutapsicomotora" value="disturbios da fala">Disturbios da fala
							<input type="radio" name="condutapsicomotora" value="paralisia">Alguma Paralisia
							<input type="radio" name="condutapsicomotora" value="enurese noturna">Enurese Noturna
							<input type="radio" name="condutapsicomotora" value="descontrole dos esfincteres">Descontrole dos Esfincteres
						</td>
						<td>
							<label>Alimentação:</label>
							<input type="radio" name="alimentacao" value="rejeita">Rejeita
							<input type="radio" name="alimentacao" value="normal">Alimenta-se normalmente
							<input type="radio" name="alimentacao" value="supra alimenta-se">Supra Alimenta-se
						</td>
					</tr>
					<tr>
						<td>
							<label>Sociabilidade:</label>
							<input type="radio" name="sociabilidade" value="isolada">Isolada
							<input type="radio" name="sociabilidade" value="agressiva">Agressiva
							<input type="radio" name="sociabilidade" value="normal">Normal
						</td>
						<td>
							<label>Apresenta alguma patologia de conduta:</label>
							<input type="radio" name="patologia" value="tique">Tiques
							<input type="radio" name="patologia" value="fobia">Fobias
							<input type="radio" name="patologia" value="ansiedade">Ansiedade
							<input type="radio" name="patologia" value="medo">Medos
							<input type="radio" name="patologia" value="birra">Birras
							<input type="radio" name="patologia" value="ciumes">Ciúmes
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Observações:</label>
							<textarea rows="3" cols="125" name="observacoes" style="resize: none;"></textarea>
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
							<input type="radio" name="labio" value="normal">Normal
							<input type="radio" name="labio" value="alterado">Alterado
						</td>
						<td>
							<label>Mucosa Alveolar: </label>
							<input type="radio" name="mucosaalveolar" value="normal">Normal
							<input type="radio" name="mucosaalveolar" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td>
							<label>Mucosa Jugal: </label>
							<input type="radio" name="mucosajugal" value="normal">Normal
							<input type="radio" name="mucosajugal" value="alterado">Alterado
						</td>
						<td>
							<label>Gengivas: </label>
							<input type="radio" name="gengivas" value="normal">Normal
							<input type="radio" name="gengivas" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td>
							<label>Língua: </label>
							<input type="radio" name="lingua" value="normal">Normal
							<input type="radio" name="lingua" value="alterado">Alterado
						</td>
						<td>
							<label>Glândulas Salivares: </label>
							<input type="radio" name="glandulasalivar" value="normal">Normal
							<input type="radio" name="glandulasalivar" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td>
							<label>Soalho da Boca: </label>
							<input type="radio" name="soalhoboca" value="normal">Normal
							<input type="radio" name="soalhoboca" value="alterado">Alterado
						</td>
						<td>
							<label>Linfonodos: </label>
							<input type="radio" name="linfonodos" value="normal">Normal
							<input type="radio" name="linfonodos" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td>
							<label>Palato Duro: </label>
							<input type="radio" name="palatoduro" value="normal">Normal
							<input type="radio" name="palatoduro" value="alterado">Alterado
						</td>
						<td>
							<label>ATM: </label>
							<input type="radio" name="atm" value="normal">Normal
							<input type="radio" name="atm" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td>
							<label>Garganta: </label>
							<input type="radio" name="garganta" value="normal">Normal
							<input type="radio" name="garganta" value="alterado">Alterado
						</td>
						<td>
							<label>Músculos Mastigadores: </label>
							<input type="radio" name="musculoMastigador" value="normal">Normal
							<input type="radio" name="musculoMastigador" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td>
							<label>Palato Mole: </label>
							<input type="radio" name="palatomole" value="normal">Normal
							<input type="radio" name="palatomole" value="alterado">Alterado
						</td>
						<td>
							<label>Oclusão: </label>
							<input type="radio" name="oclusao" value="normal">Normal
							<input type="radio" name="oclusao" value="alterado">Alterado
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Alterações encontradas:</label><br>
							<textarea rows="8" cols="125" name="alteracoes" style="resize: none;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Pressão Arterial:</label><br>
							<label>Máxima: </label><input type="number" name="pressaoArterialMax"><label>mmHG</label><br>
							<label>Mínima: </label><input type="number" name="pressaoArterialMin"><label>mmHG</label><br>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Diagnóstico presuntivo: </label><br>
							<textarea rows="3" cols="125" name="diagnosticopresuntivo" style="resize: none;"></textarea>
						</td>
					</tr>
					<tr>	
						<td colspan="2">
							<label>Exames complementares: </label><br>
							<textarea rows="3" cols="125" name="examescomplementares" style="resize: none;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Diagnóstico definitivo: </label><br>
							<textarea rows="3" cols="125" name="diagnosticodefinitivo" style="resize: none;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Tratamento/Proservação: </label><br>
							<textarea rows="3" cols="125" name="tratamentoproservacao" style="resize: none;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label>Plano de tratamento: </label><br>
							<textarea rows="10" cols="125" name="plano_tratamento" style="resize: none;"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="1">
							<input type="radio" name="atendimento_urgencia" value="atendimento urgente">
							<label>Atendimento de Urgência (Estágio Sup. em Clínica Odontológica Integrada – URGÊNCIA)</label>
						</td>
						<td colspan="1">	
							<label>Medicação </label><br>
							<input type="radio" name="medicacao" value="sim"><label>Sim</label>
							<input type="radio" name="medicacao" value="nao"><label>Não</label>
							<input type="text" name="remedio" size="30" placeholder="Caso tome medicação colocar aqui..."><br>
						</td>
					</tr>
					<tr>
						<td  colspan="2">
							<label>Nome do responsável: </label>
							<input type="text" name="responsavel" class="margem"  size="30">
							
						
							<label>Aluno responsável: </label>
							<input type="text" name="aluno_responsavel" class="margem" size="30" >
						
						
							<label>Professor Responsável: </label>
							<input type="text" name="professor_responsavel" class="margem" size="30" >
						</td>
					</tr>
				</table>
				<input type="hidden" name="id" value="<?=$registro[0]->id?>">
				<input type="submit" value="Cadastrar" class="class2">
			</form>
		</div>
	</body>
</html>