<?php
include_once __DIR__ . "/../Models/TipoUsuario.php";

class TipoUsuarioController
{
    private $tipoUsuarioObj;

    /*
        Un constructor es un método especial que se llama automáticamente cuando se crea una 
        instancia de la clase.
        Se utiliza para inicializar propiedades de la clase o realizar configuraciones iniciales.
        En php un constructor se define con __construct()
    */

    public function __construct()
    {
        $this->tipoUsuarioObj = new TipoUsuario();
    }


    /*
        Metodo que permite llenar las propiedades del objeto tipoUsuarioObj
    */
    public function crearTipoUsuario($nombreTipo, $fechaRegistro)
    {
        $this->tipoUsuarioObj->setPropiedades("NombreTipo", $nombreTipo);
        $this->tipoUsuarioObj->setPropiedades("FechaRegistro", $fechaRegistro);
        return $this->tipoUsuarioObj->insertarTipoUsuario();
    }
}