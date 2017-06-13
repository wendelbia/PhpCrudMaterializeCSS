<?php 
require "../conectDB/ConectDB.php";
/**
* 
*/
class Model extends ConectDB
{
	public $nome_produto;
	public $valor_produto;
	public $descricao_produto;

	protected $table_produto;

	public function setNome_produto($nome_produto){
		$this->nome_produto = $nome_produto;
	}

	public function getNome_produto(){
		return $this->nome_produto;
	}

	public function setValor_produto($valor_produto){
		$this->valor_produto = $valor_produto;
	}

	public function getValor_produto(){
		return $this->valor_produto;
	}

	public function setDescricao_produto($descricao_produto){
		$this->descricao_produto = $descricao_produto;
	}

	public function getDescricao_produto(){
		return $this->descricao_produto;
	}
	
}
 ?>