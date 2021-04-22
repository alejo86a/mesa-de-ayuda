<?php

class CargoDao {
	
	private $conexionDB;
	
	public function CargoDao() {
		$this -> conexionDB= new Conectar();
	}
	
	public function __destruct() {
		$this -> conexionDB = Null;
	}
	
	/**
	 * Get All Requerimientos
	 *
	 * @return array
	 */
	public function GetAllCargos() {
		try {
			$sql = "SELECT * FROM cargo";
			$result = $this->conexionDB->connect()->query($sql);

			return $result;
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
}

?>
