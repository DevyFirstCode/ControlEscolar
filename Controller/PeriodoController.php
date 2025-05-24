<?php
include_once __DIR__ . "/../Models/Periodo.php";
class PeriodoController
{
    private $periodo;

    public function __construct()
    {
        $this->periodo = new Periodo();
    }

    public function editarPeriodo($periodoId, $nombrePeriodo)
    {
        return $this->periodo->editarPeriodo($periodoId, $nombrePeriodo);
    }
}
?>