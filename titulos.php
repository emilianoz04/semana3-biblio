<?php
$archivoentrada = './Libroscsv.csv';
$archivosalida = './Data/Titulos.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

while (($linea = fgets($lectura)) !== false) 
{
    $campos = explode(",", trim($linea));
    
    // Columna 2 = Título
    $titulo = isset($campos[2]) ? trim($campos[2]) : "SIN DATOS";
    
    fwrite($salida, $titulo . PHP_EOL);
    echo $titulo . "\n";
}
fclose($lectura);
fclose($salida);
echo "Archivo Titulos.txt generado correctamente.\n";
?>