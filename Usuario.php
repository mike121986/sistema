<?php
require_once("Autoload.php");
class Usuario extends Conexion
{
    // atributos
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;
     //metodos
    public function __construct()
    {
        $this->conexion = new Conexion();
    }
}
