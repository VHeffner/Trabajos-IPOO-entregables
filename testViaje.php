<?php

require_once 'Viaje.php';

echo "Bienvenido a Viaje Feliz\n";

$responsable = new ResponsableV("123", "Lic123", "Responsable", "Viaje");

echo "Ingrese el código del viaje: ";
$codigo = readline();
echo "Ingrese el destino del viaje: ";
$destino = readline();
echo "Ingrese la cantidad máxima de pasajeros: ";
$maxPasajeros = intval(readline());

$viaje = new Viaje($codigo, $destino, $maxPasajeros, $responsable);

while (true) {
    echo "\nMenú:\n";
    echo "1. Agregar pasajero\n";
    echo "2. Modificar información de pasajero\n";
    echo "3. Ver información del viaje\n";
    echo "4. Salir\n";
    echo "Seleccione una opción: ";
    $opcion = intval(readline());

    switch ($opcion) {
        case 1:
            echo "Ingrese el nombre del pasajero: ";
            $nombre = readline();
            echo "Ingrese el apellido del pasajero: ";
            $apellido = readline();
            echo "Ingrese el número de documento del pasajero: ";
            $numeroDocumento = readline();
            echo "Ingrese el teléfono del pasajero: ";
            $telefono = readline();

            if ($viaje->agregarPasajero($nombre, $apellido, $numeroDocumento, $telefono)) {
                echo "Pasajero agregado exitosamente\n";
            } else {
                echo "No se pudo agregar al pasajero (posiblemente ya está en el viaje o el viaje está lleno)\n";
            }
            break;

        case 2:
            echo "Ingrese el número de documento del pasajero que desea modificar: ";
            $numeroDocumento = readline();
            echo "Ingrese el nuevo nombre del pasajero: ";
            $nombre = readline();
            echo "Ingrese el nuevo apellido del pasajero: ";
            $apellido = readline();
            echo "Ingrese el nuevo teléfono del pasajero: ";
            $telefono = readline();

            if ($viaje->modificarPasajero($numeroDocumento, $nombre, $apellido, $telefono)) {
                echo "Información del pasajero modificada exitosamente\n";
            } else {
                echo "No se pudo encontrar al pasajero\n";
            }
            break;

        case 3:
            echo $viaje->obtenerInformacion() . "\n";
            break;

        case 4:
            echo "¡Gracias por utilizar Viaje Feliz!\n";
            exit();

        default:
            echo "Opción inválida, por favor intente nuevamente\n";
            break;
    }
}

?>
