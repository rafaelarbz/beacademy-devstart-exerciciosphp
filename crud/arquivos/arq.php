<?php 

$arquivo = fopen('cadastro.csv', 'a+');

fwrite($arquivo, 'Rafaela' .PHP_EOL);
fwrite($arquivo, 'Rabelo' .PHP_EOL);

fclose($arquivo);


?>