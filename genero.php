<?php

$archivoentrada = './Data/datos.txt';
$archivosalida = './Data/Generos.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

$id = 1; // si querés enumerar por fila

while (($linea = fgets($lectura)) !== false) 
    {
        $campos = explode("|", trim($linea));
        $genero = isset($campos[3]) ? trim($campos[3]) : "SIN DATOS";
        // guardar línea: ID|Género
        fwrite($salida, $id . "|" . $genero . PHP_EOL);
        // mostrar en pantalla también
        echo $id . "|" . $genero . "\n";
        $id++;
    }
    fclose($lectura);
    fclose($salida);
    echo "Archivo Generos.txt generado correctamente.\n";
?>