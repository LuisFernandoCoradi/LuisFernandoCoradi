<?php
class Cadastro{
	private $id;
	private $nome;
	private $CPF;
	private $sexo;
	private $peso;
	private $RG;
	private $estado_civil;
	private $naturalidade;
	private $estado;
	private $contato;
	private $nome_mae;
	private $nome_pai;
	private $endereco;
	private $numEndereco;
	private $bairro;
	private $complemento;
	private $cep;
	private $estado2;
	private $data_cadastro;
	private $consulta;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
	}
}
?>