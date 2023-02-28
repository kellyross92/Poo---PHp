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
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apelldio)
    {
        $this->apellido = $apelldio;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    
}

$empleado1 = new Empleado('Kelly', 'Duran', 'Sytems', 'kellyross@correo.com', '02');


$empleado1->setNombre('Valeria');
$empleado1->setCodigo('01');
$empleado1->setApellido('Duran Cuqueca');

echo $empleado1->getNombre();
echo $empleado1->getCodigo();
echo $empleado1->getApellido();


