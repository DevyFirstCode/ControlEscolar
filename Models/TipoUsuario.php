<?php
include_once __DIR__ . "/ConexionBd.php";

class TipoUsuario
{
    private $TipoUsuarioId;
    private $NombreTipo;
    private $FechaRegistro;

    private $objetoConexion;

    public function __construct()
    {
        $this->objetoConexion = new ConexionBd();
    }

    public function setPropiedades($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function insertarTipoUsuario(){
        $sql = "INSERT INTO tipousuario (NombreTipo, FechaRegistro) VALUES ('$this->NombreTipo', '$this->FechaRegistro')";
        $resultado = $this->objetoConexion->ejecutarConsulta($sql);
        return $resultado;
    }
    
}

?>