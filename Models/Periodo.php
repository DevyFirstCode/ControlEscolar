<?php
include_once __DIR__ . "/ConexionBd.php";
class Periodo
{
    public $PeriodoId;
    public $NombrePeriodo;
    private $objetoConexion;

    // Constructor opcional
    public function __construct()
    {
        $this->objetoConexion = new ConexionBd();
    }

    // Ejemplo de método para listar periodos (ajusta según tu base de datos)
    public function editarPeriodo($periodoId, $nombrePeriodo)
    {
        $sql = "UPDATE periodo SET NombrePeriodo = '$nombrePeriodo' WHERE PeriodoId = $periodoId";
        $resultado = $this->objetoConexion->ejecutarConsulta($sql);
        return $resultado;
    }
}