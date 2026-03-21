<?php
$autores = fopen('./Data/Autores.txt', 'r');
$titulos = fopen('./Data/Titulos.txt', 'r');
$generos = fopen('./Data/Generos.txt', 'r');
$editoriales = fopen('./Data/Editoriales.txt', 'r');

$salida = fopen('./Data/datos.txt', 'w');

$id = 1;
while (
    ($autor = fgets($autores)) !== false &&
    ($titulo = fgets($titulos)) !== false &&
    ($genero = fgets($generos)) !== false &&
    ($editorial = fgets($editoriales)) !== false
) 
{
    $linea = $id . "|" .
             trim($autor) . "|" .
             trim($titulo) . "|" .
             trim($genero) . "|" .
             trim($editorial);

    fwrite($salida, $linea . PHP_EOL);
    echo $linea . "\n";
    $id++;
}
fclose($autores);
fclose($titulos);
fclose($generos);
fclose($editoriales);
fclose($salida);

echo "Archivo datos.txt generado correctamente.\n";

?>