<?php

$archivoentrada = './Libroscsv.csv';
$archivosalida = './Data/Editoriales.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

while (($linea = fgets($lectura)) !== false) 
{
    $campos = explode(",", trim($linea));
    // Columna 4 = Editorial
    $editorial = isset($campos[4]) ? trim($campos[4]) : "SIN DATOS";
    fwrite($salida, $editorial . PHP_EOL);
    echo $editorial . "\n";
}
fclose($lectura);
fclose($salida);
echo "Archivo Editoriales.txt generado correctamente.\n";

?>