<?php
  class AreaDTO {

    private $IDAREA;
    private $NOMBRE;

    function StudentDTO($IDAREA, $NOMBRE) {
        $this->IDAREA = $IDAREA;
        $this->NOMBRE = $NOMBRE;
    }

    public function GetIDAREA() { return $this->IDAREA; }
    public function GetNOMBRE() { return $this->NOMBRE; }
  }
?>
