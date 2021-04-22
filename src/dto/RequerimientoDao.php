<?php
  class RequerimientoDTO {

    private $IDREQ;

    function StudentDTO($IDREQ) {
        $this->IDREQ = $IDREQ;
    }

    public function GetIDREQ() { return $this->IDREQ; }
  }
?>
