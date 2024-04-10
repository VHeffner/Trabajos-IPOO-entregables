<?php

class ResponsableV {
    public $numeroEmpleado;
    public $numeroLicencia;
    public $nombre;
    public $apellido;

    public function __construct($numeroEmpleado, $numeroLicencia, $nombre, $apellido) {
        $this->numeroEmpleado = $numeroEmpleado;
        $this->numeroLicencia = $numeroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
}

?>
