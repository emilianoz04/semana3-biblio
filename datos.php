<?php
$archivoentrada = "./Libroscsv.csv";
$archivosalida = "./Data/datos.txt";

if (!is_readable($archivoentrada)) 
    {
        echo "No se puede leer el archivo\n";
        exit;
    }
$input = fopen($archivoentrada, "r");
$output = fopen($archivosalida, "w");
while (($datos = fgetcsv($input)) !== false) 
    {
    // unir directamente con |
    $linea = implode("|", $datos);
    echo $linea . "\n";
    // escribir en el archivo
    fwrite($output, $linea . PHP_EOL);
    }
fclose($input);
fclose($output);
echo "Archivo generado correctamente\n";
?>