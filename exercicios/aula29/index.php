<?php

$url = $_SERVER['REQUEST_URI'];
echo $url;

include 'telas/menu.php';

if($url === '/login'){
    include 'telas/login.php';
}elseif($url === '/home'){
    include 'telas/home.php';
}elseif($url === '/cadastro'){
    include 'telas/cadastro.php';
}else{
    echo "<h1>Página não encontrada</h1>";
}


?>