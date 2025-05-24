<?php

include_once __DIR__ . "/ConexionBd.php";
class Carrera
{
    private $CarreraId;
    private $Nombre;
    private $Clave;
    private $Active;
    private $CreatedBy;

    private $objetoConexion;

    public function __construct()
    {
        $this->objetoConexion = new ConexionBd();
    }

    public function setPropiedades($atributo, $contenido)
    {
        $this->$atributo = $contenido;
    }

    public function listarCarreras()
    {
        $sql = "SELECT * FROM carrera WHERE Active = 1 ORDER BY Nombre";
        $resultado = $this->objetoConexion->ejecutarConsulta($sql);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }   
}