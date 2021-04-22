<?php
  class RequerimientoDTO {

    private $IDCARGO;
    private $NOMBRE;

    function StudentDTO($IDCARGO, $NOMBRE) {
        $this->IDCARGO = $IDCARGO;
        $this->NOMBRE = $NOMBRE;
    }

    public function GetIDCARGO() { return $this->$IDCARGO; }
    public function GetNOMBRE() { return $this->NOMBRE; }
  }
?>
