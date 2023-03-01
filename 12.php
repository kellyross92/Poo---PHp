<?php
include 'includes/header.php';

// METODOS ESTATICOS
class Empleado{
    
    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;

    }
    
    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public static function obtenerEmpleado()
    {
        echo "desde el metodo estatico";
    }
}

Empleado::obtenerEmpleado();
echo "<pre>";
var_dump();
echo "</pre>";
