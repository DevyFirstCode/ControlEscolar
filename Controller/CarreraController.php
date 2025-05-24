<?php

require_once __DIR__ . "/../Models/Carrera.php";

class CarreraController
{
    private $carreraModelObj;

    public function __construct()
    {
        $this->carreraModelObj = new Carrera();
    }
    public function listarCarreras()
    {
        $carreras = $this->carreraModelObj->listarCarreras();
        return $carreras;
    }
}
?>