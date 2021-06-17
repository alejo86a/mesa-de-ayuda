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
	
	/**
	 * delete Cargo
	 *
	 * @return true or false
	*
	*/	
	public function deleteCargo($id){
		try {
			$sql = "DELETE FROM cargo WHERE IDCARGO=".$id;
			$result = $this->conexionDB->connect()->query($sql);
			
			$this->conexionDB->connect()->close();
			return  ($result === TRUE);
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
}

?>
