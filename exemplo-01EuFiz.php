<?php
//Criando as variáveis para os diretorios:
$dir_A = "origem";
$dir_B = "destino";

//verificando se não existem os diretórios e criando:
if(!is_dir($dir_A)) mkdir($dir_A);
if(!is_dir($dir_B)) mkdir($dir_B);

//Criando a variável para o nome do arquivo a ser renomeado:
$arquivo = "readme.txt";

//Verificando se o arquivo já não existe no primeiro diretorio, 
//criando ele, e escrevendo algo nele.
if(!file_exists($dir_A . DIRECTORY_SEPARATOR . $arquivo)){

    $file = fopen($dir_A . DIRECTORY_SEPARATOR . $arquivo, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    //fechando.
    fclose($file);
}

//usando rename.
rename($dir_A . DIRECTORY_SEPARATOR . $arquivo,
       $dir_B . DIRECTORY_SEPARATOR . $arquivo
);

//fazendo um echo.
echo "Beleza véio, o carinha foi copiado.";

?>