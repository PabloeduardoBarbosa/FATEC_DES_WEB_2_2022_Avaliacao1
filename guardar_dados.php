<?php

$nome_prod=$_POST['nome_livro'];
$quantidade=$_POST['nome_autor'];
$fornecedor=$_POST['fornecedor'];

$filename = "lista_livro.txt";
if(!file_exists($filename)){
    $handle=fopen($filename, "w");
} else {
    $handle=fopen($filename, "a");
}

fwrite($handle,$nome_livro."\n");
fwrite($handle,$nome_autor."\n");
fwrite($handle,$fornecedor."\n");
flush($handle);
fclose($handle);
    
$handle=fopen($filename,"r");
while(!feof($handle)){
    $line = fgets($handle);
    echo $line. "<br>";
}

fclose($handle);    
?>
