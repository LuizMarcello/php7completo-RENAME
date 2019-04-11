<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

//No 'if', se for só uma instrução, pode ser na mesma linha, e sem as chaves '{}'.
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.TXT";

if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
    //'$file' será o manipulador/resource do arquivo a ser criado.
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename,//origem
    $dir2 . DIRECTORY_SEPARATOR . $filename,//destino
);

echo "Arquivo movido com sucesso!";


?>