<?php
include 'includes/header.php';

// instanciar una clase
class Empleado{
    
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado1 = new Empleado;
$empleado1->nombre = 'Kelly';

echo "<pre>";
var_dump($empleado1);
echo "</pre>";