<?php 
require '../modelDB/Model.php';

/**
* 
*/
class Funcoes extends Model
{
	protected $table='tb_produto';
	
	public function inserir()
	{
		$sql = "INSERT INTO $this->table (nome_produto, valor_produto, descricao_produto) VALUES(:nome_produto, :valor_produto, :descricao_produto)";
		$stmt = ConectDB::prepare($sql);
		$stmt->bindParam(':nome_produto', $this->nome_produto);
		$stmt->bindParam(':valor_produto', $this->valor_produto);
		$stmt->bindParam(':descricao_produto', $this->descricao_produto);
		return $stmt->execute();
	}

	public function read(){
		$sql = "SELECT * FROM $this->table ORDER BY id DESC";
		$stmt = ConectDB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function readOn($id){
		$sql = "SELECT * FROM $this->table WHERE id = :id ORDER BY id DESC";
		$stmt = ConectDB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function delete($id){
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = ConectDB::prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		return $stmt->execute();
	}

	public function update($id){
		$sql = "UPDATE $this->table SET nome_produto = :nome_produto, valor_produto = :valor_produto, descricao_produto = :descricao_produto WHERE id = :id";
		$stmt = ConectDB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->bindParam(':nome_produto', $this->nome_produto);
		$stmt->bindParam(':valor_produto', $this->valor_produto);
		$stmt->bindParam(':descricao_produto', $this->descricao_produto);
		return $stmt->execute();
	}

	
}
 ?>