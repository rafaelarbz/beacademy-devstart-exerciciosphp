<?php
include 'acoes.php';
include 'style/bootstrap.html';

$url = explode('?' , $_SERVER['REQUEST_URI']);

include 'telas/menu.php';

switch($url[0]){
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
    case '/excluir' :
        deleteCadastro();
        break;
    case '/editar' :
        editCadastro();
        break;
    default :
        pageError();
}



include 'telas/footer.php';
?>