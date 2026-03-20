<?php
$archivoentrada = './Data/datos.txt';
$archivosalida = './Data/Titulos.txt';

$lectura = fopen($archivoentrada, "r");
$salida = fopen($archivosalida, "w");

$id = 1;
while (($linea = fgets($lectura)) !== false) 
{
    $campos = explode("|", trim($linea));
    
    // Columna 2 = Título
    $titulo = isset($campos[2]) ? trim($campos[2]) : "SIN DATOS";
    
    fwrite($salida, $id . "|" . $titulo . PHP_EOL);
    echo $id . "|" . $titulo . "\n";
    
    $id++;
}
fclose($lectura);
fclose($salida);
echo "Archivo Titulos.txt generado correctamente.\n";

?>