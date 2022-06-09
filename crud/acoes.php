<?php

function pageHome() {
    include 'telas/home.php';
}

function pageLogin() {
    include 'telas/login.php';
}

function pageCadastro() {

    if($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv', 'a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        echo "Cadastro realizado com sucesso!";
    }     

    include 'telas/cadastro.php';
}

function pageList() {
    $alunos = file('crud/dados/alunos.csv');
    
    include 'telas/lista.php';
}

function pageError() {
    include 'telas/404.php';
}

?>