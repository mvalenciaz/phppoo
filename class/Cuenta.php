<?php

class Cuenta 
{
    private $nombre;
    private $nroCuenta;
    private $tipoInteres;
    private $saldo;

    public function __construct($nombre, $nroCuenta, $tipoInteres, $saldo)
    {
        $this->nombre = $nombre;
        $this->nroCuenta = $nroCuenta;
        $this->tipoInteres = $tipoInteres;
        $this->saldo = $saldo;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

}