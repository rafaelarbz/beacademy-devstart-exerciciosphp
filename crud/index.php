<?php
include 'acoes.php';
include 'style/bootstrap.html';

$url = $_SERVER['REQUEST_URI'];

include 'telas/menu.php';

switch($url){
    case '/' :
        pageHome();
        break;
    case '/login' :
        pageLogin();
        break;
    case '/cadastro' :
        pageCadastro();
        break;
    case '/lista' :
        pageList();
        break;
    default :
        pageError();
}


?>