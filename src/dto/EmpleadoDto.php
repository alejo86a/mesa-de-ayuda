<?php
  class EmpleadoDTO {

    private $IDEMPLEADO;
    private $NOMBRE;
    private $FOTO;
    private $HOJAVIDA;
    private $TELEFONO;
    private $EMAIL;
    private $DIRECCION;
    private $X;
    private $Y;

    function StudentDTO($IDEMPLEADO,$NOMBRE, $FOTO, $HOJAVIDA, $TELEFONO, $EMAIL, $DIRECCION, $X, $Y) {
        $this->IDEMPLEADO = $IDEMPLEADO;
        $this->NOMBRE = $NOMBRE;
				$this->FOTO = $FOTO;
				$this->HOJAVIDA = $HOJAVIDA;
				$this->TELEFONO = $TELEFONO;
				$this->EMAIL = $EMAIL;
				$this->DIRECCION = $DIRECCION;
				$this->X = $X;
				$this->Y = $Y;
    }

    public function GetIDEMPLEADO() { return $this->IDEMPLEADO; }
    public function GetNOMBRE() { return $this->NOMBRE; }
		public function GetFOTO() { return $this->FOTO; }
		public function GetHOJAVIDA() { return $this->HOJAVIDA; }
		public function GetTELEFONO() { return $this->TELEFONO; }
		public function GetEMAIL() { return $this->EMAIL; }
		public function GetDIRECCION() { return $this->DIRECCION; }
		public function GetX() { return $this->X; }
		public function GetY() { return $this->Y; }

  }
?>
