<?php
$archivoentrada = './Libroscsv.csv';
$archivosalida = './Data/Autores.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

while (($linea = fgets($lectura)) !== false) 
{
    $campos = explode(",", trim($linea));
    // Columna 1 = Autor
    $autor = isset($campos[1]) ? trim($campos[1]) : "SIN DATOS";
    fwrite($salida , $autor . PHP_EOL);
    echo $autor . "\n";
}
fclose($lectura);
fclose($salida);
echo "Archivo Autores.txt generado correctamente.\n";
?>