<?php

function pageHome() {
    include 'telas/home.php';
}

function pageLogin() {
    include 'telas/login.php';
}

function pageCadastro() {
    include 'telas/cadastro.php';
}

function pageList() {
    $alunos = file('dados/alunos.csv');
    
    include 'telas/lista.php';
}

function pageError() {
    include 'telas/404.php';
}

?>