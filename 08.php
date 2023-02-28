<?php
include 'includes/header.php';

// METODOS
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
    
}

$empleado1 = new Empleado('Kelly', 'Duran', 'Sytems', 'kellyross@correo.com', '02');

echo $empleado1->cambiarNombre('Valeria');

echo "<pre>";
var_dump([$empleado1]);
echo "</pre>";
