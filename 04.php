<?php
include 'includes/header.php';

// instanciar una clase
class Empleado{
    
    public $nombre;
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

}

$empleado1 = new Empleado('Kelly', 'Duran', 'Sytems', 'kellyross@correo.com', '02');
$empleado2 = new Empleado('Valeria', 'Duran', 'Babys', 'cuqueca@correo.com', '01');


echo "<pre>";
var_dump([$empleado1, $empleado2]);
echo "</pre>";