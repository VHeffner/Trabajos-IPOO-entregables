<?php

require_once 'Pasajero.php';
require_once 'ResponsableV.php';

class Viaje {
    public $codigo;
    public $destino;
    public $maxPasajeros;
    public $pasajeros = array();
    public $responsable;

    public function __construct($codigo, $destino, $maxPasajeros, $responsable) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
        $this->responsable = $responsable;
    }

    public function agregarPasajero($nombre, $apellido, $numeroDocumento, $telefono) {
        if ($this->buscarPasajero($numeroDocumento) === false && count($this->pasajeros) < $this->maxPasajeros) {
            $pasajero = new Pasajero($nombre, $apellido, $numeroDocumento, $telefono);
            $this->pasajeros[] = $pasajero;
            return true;
        } else {
            return false;
        }
    }

    public function modificarPasajero($numeroDocumento, $nombre, $apellido, $telefono) {
        $indice = $this->buscarPasajero($numeroDocumento);
        if ($indice !== false) {
            $this->pasajeros[$indice]->modificarInformacion($nombre, $apellido, $telefono);
            return true;
        } else {
            return false;
        }
    }

    private function buscarPasajero($numeroDocumento) {
        foreach ($this->pasajeros as $indice => $pasajero) {
            if ($pasajero->numeroDocumento === $numeroDocumento) {
                return $indice;
            }
        }
        return false;
    }

    public function obtenerInformacion() {
        $infoViaje = "Información del Viaje:\n";
        $infoViaje .= "Código: " . $this->codigo . "\n";
        $infoViaje .= "Destino: " . $this->destino . "\n";
        $infoViaje .= "Cantidad máxima de pasajeros: " . $this->maxPasajeros . "\n";
        $infoViaje .= "Responsable del viaje: " . $this->responsable->nombre . " " . $this->responsable->apellido . "\n";
        $infoViaje .= "Pasajeros:\n";
        foreach ($this->pasajeros as $pasajero) {
            $infoViaje .= "- Nombre: " . $pasajero->nombre . ", Apellido: " . $pasajero->apellido . ", Documento: " . $pasajero->numeroDocumento . ", Teléfono: " . $pasajero->telefono . "\n";
        }
        return $infoViaje;
    }
}

