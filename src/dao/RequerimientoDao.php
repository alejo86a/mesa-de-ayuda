<?php

class RequerimientoDao {
	
	private $conexionDB;
	
	public function RequerimientoDao() {
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
	public function GetAllRequerimientos() {
		try {
			$sql = "SELECT * FROM requerimiento";
			$result = $this->conexionDB->connect()->query($sql);

			return $result;
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
}

?>
