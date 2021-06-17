<?php

class EmpleadoDao {
	
	private $conexionDB;
	
	public function EmpleadoDao() {
		$this -> conexionDB= new Conectar();
	}
	
	public function __destruct() {
		$this -> conexionDB = Null;
	}
	
	/**
	 * Get All Empleados
	 *
	 * @return array
	 */
	public function GetAllEmpleados() {
		try {
			$sql = "SELECT empleado.*, cargo.NOMBRE as CARGO
				FROM empleado
				INNER JOIN cargo_por_empleado ON empleado.IDEMPLEADO=cargo_por_empleado.fkEMPLE
				INNER JOIN cargo ON cargo_por_empleado.FKCARGO=cargo.IDCARGO;";
			$result = $this->conexionDB->connect()->query($sql);

			return $result;
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
	
	/**
	 * delete Empleado
	 *
	 * @return true or false
	*
	*/	
	public function deleteEmpleado($id){
		try {
			$sql = "DELETE FROM cargo_por_empleado WHERE FKEMPLE=".$id.";";
			$result = $this->conexionDB->connect()->query($sql);
			if($result === TRUE){
				$sql = "DELETE FROM empleado WHERE IDEPLEADO=".$id.";";
				$result = $this->conexionDB->connect()->query($sql);
			
				$this->conexionDB->connect()->close();
				return  ($result === TRUE);
			} else {			
				$this->conexionDB->connect()->close();
				return false;
			}
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
}

?>
