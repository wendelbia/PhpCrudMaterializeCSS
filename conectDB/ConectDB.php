<?php 

class ConectDB{
	private static $instance;

	public static function getInstance(){
		if (!isset(self::$instance)) {
			try {
				self::$instance = new PDO('mysql:host=localhost;dbname=db_produto', 'root', 'biabiabia');
			} catch (Exception $e) {
				echo "Erro: ".$e->getMessage();
			}
		}
		return self::$instance;
	}

	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}
}	

 ?>