<?php
include_once __DIR__ . "/ConexionBd.php";
/*
    Creado por: Nombre del estudiante
    Fecha: 2023-10-01
    Semestre: 4
*/
class EstatusEst
{
    public $EstatusEstId;
    public $NombreEstatusEst;
    private $objetoConexion;

    // Constructor opcional
    public function __construct()
    {
        $this->objetoConexion = new ConexionBd();
    }

    // Ejemplo de método para listar estatus (ajusta según tu base de datos)
    public function eliminarEstatusEst($estatusEstId)
    {
        $sql = "DELETE FROM estatusest WHERE EstatusEstId = $estatusEstId";
        $resultado = $this->objetoConexion->ejecutarConsulta($sql);
        return $resultado;
    }
}