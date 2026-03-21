<?php
$archivoentrada = './Libroscsv.csv';
$archivosalida = './Data/Generos.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

while (($linea = fgets($lectura)) !== false) 
    {
        $campos = explode(",", trim($linea));
        $genero = isset($campos[3]) ? trim($campos[3]) : "SIN DATOS";
        // guardar línea: ID|Género
        fwrite($salida, $genero . PHP_EOL);
        // mostrar en pantalla también
        echo $genero . "\n";
    }
    fclose($lectura);
    fclose($salida);
    echo "Archivo Generos.txt generado correctamente.\n";
?>