<?php

/*
Clase [Programacion Orientada a Objetos POO]
Una clase es una plantilla para crear objetos.
Una clase define un conjunto de propiedades y métodos que los objetos creados a partir de la clase pueden usar.
*/
class ConexionBd
{
    private $servidor;
	private $usuarioBd;
	private $passwordBd;
	private $nombreBd;
	private $con;

    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuarioBd = "root";
        $this->passwordBd = "";
        $this->nombreBd = "schoolbd";
        $this->conectar();
    }

    private function conectar()
    {
        $this->con = new mysqli($this->servidor, $this->usuarioBd, $this->passwordBd, $this->nombreBd);
        if ($this->con->connect_error) {
            die("Error de conexión: " . $this->con->connect_error);
        }
    }

    public function getConexion()
    {
        return $this->con;
    }
}