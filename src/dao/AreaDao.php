<?php

class AreaDao {
	
	private $conexionDB;
	
	public function AreaDao() {
		$this -> conexionDB= new Conectar();
	}
	
	public function __destruct() {
		$this -> conexionDB = Null;
	}
	
	/**
	 * Get All Areas
	 *
	 * @return array
	 */
	public function GetAllAreas() {
		try {
			$sql = "SELECT * FROM area";
			$result = $this->conexionDB->connect()->query($sql);

			return $result;
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
}

?>
