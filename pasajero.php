<?php

class Pasajero {
    public $nombre;
    public $apellido;
    public $numeroDocumento;
    public $telefono;

    public function __construct($nombre, $apellido, $numeroDocumento, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroDocumento = $numeroDocumento;
        $this->telefono = $telefono;
    }

    public function modificarInformacion($nombre, $apellido, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
    }
}

?>
