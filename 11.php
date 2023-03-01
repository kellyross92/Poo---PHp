<?php
include 'includes/header.php';

// HERENCIA
class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;  
    
    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion()
    {
        echo $this->nombre." . ".$this->apellido;
    }
}

class Empleado extends Persona{    
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
       parent::__construct($nombre, $apellido, $email, $telefono );
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}

class Proveedor extends Persona{
   
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }
}

$persona = new Persona('Krossoc', 'Dugut', 'krkp@correo.com',3004384858);
$empleado = new Empleado('Kelly', 'Duran', 'kellyross@correo.com',3002074858, '02', 'system');
$proveedor = new Proveedor('Octavio', 'Gutierrez', 'kapo02@gmail.com', 3004381044, 'Taxi');

$empleado->mostrarInformacion();

echo "<pre>";
var_dump($persona);
echo "</pre>";

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";