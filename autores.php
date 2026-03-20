<?php

$archivoentrada = './Data/datos.txt';
$archivosalida = './Data/Autores.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

$id = 1;
while (($linea = fgets($lectura)) !== false) 
{
    $campos = explode("|", trim($linea));
    // Columna 1 = Autor
    $autor = isset($campos[1]) ? trim($campos[1]) : "SIN DATOS";
    fwrite($salida, $id . "|" . $autor . PHP_EOL);
    echo $id . "|" . $autor . "\n";
    $id++;
}
fclose($lectura);
fclose($salida);
echo "Archivo Autores.txt generado correctamente.\n";

?>