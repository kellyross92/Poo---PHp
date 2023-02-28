<?php
include 'includes/header.php';

// HERENCIA

class Empleado{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        
    }
}

class Proveedor{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $empresa;

    public function __construct()
    {
        
    }
}