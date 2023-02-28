<?php
include 'includes/header.php';

// instanciar una clase
class Empleado{
   
    public function __construct(public $nombre,
     public $apellido, 
     public $departamento, 
     public $email, 
     public $codigo)
    {
        
    }

}

$empleado1 = new Empleado('Kelly', 'Duran', 'Sytems', 'kellyross@correo.com', '02');
$empleado2 = new Empleado('Valeria', 'Duran', 'Babys', 'cuqueca@correo.com', '01');


echo "<pre>";
var_dump([$empleado1, $empleado2]);
echo "</pre>";