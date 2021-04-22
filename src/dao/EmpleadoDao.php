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
				INNER JOIN cargo ON empleado.IDEMPLEADO=cargo.IDCARGO;";
			$result = $this->conexionDB->connect()->query($sql);

			return $result;
		} catch (PDOException $e) {
			die("Se produjo un error ".$e);
		}
	}
}

?>
