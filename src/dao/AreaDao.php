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
			
			$this->conexionDB->connect()->close();
			return $result;
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
	
	/**
	 * delete Area
	 *
	 * @return true or false
	*
	*/	
	public function deleteArea($id){
		try {
			$sql = "DELETE FROM area WHERE IDAREA=".$id;
			$result = $this->conexionDB->connect()->query($sql);
			
			$this->conexionDB->connect()->close();
			return  ($result === TRUE);
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
	
}

?>
