<?php

$archivoentrada = './Data/datos.txt';
$archivosalida = './Data/Editoriales.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

$id = 1;
while (($linea = fgets($lectura)) !== false) 
{
    $campos = explode("|", trim($linea));
    // Columna 4 = Editorial
    $editorial = isset($campos[4]) ? trim($campos[4]) : "SIN DATOS";
    fwrite($salida, $id . "|" . $editorial . PHP_EOL);
    echo $id . "|" . $editorial . "\n";
    $id++;
}
fclose($lectura);
fclose($salida);
echo "Archivo Editoriales.txt generado correctamente.\n";

?>