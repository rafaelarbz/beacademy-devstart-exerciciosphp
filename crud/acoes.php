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

        $arquivo = fopen('crud/dados/contatos.csv', 'a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        fclose($arquivo);

        $sucesso = "Cadastro realizado com sucesso!";
        include 'telas/mensagem.php';
    }     
    
    include 'telas/cadastro.php';
}

function pageList() {

    $contatos = file('crud/dados/contatos.csv');
    
    include 'telas/lista.php';
}

function pageError() {
    include 'telas/404.php';
}

function deleteCadastro() {

    $id = $_GET['id'];

    $contatos = file('crud/dados/contatos.csv');

    // unset a posição $id do array $contatos
    unset($contatos[$id]);
    //exclui arquivo
    unlink('crud/dados/contatos.csv');
    //cria arquivo
    $arquivo = fopen('crud/dados/contatos.csv', 'a+');
    //escreve arquivo
    foreach ($contatos as $cadaContato){
        fwrite($arquivo, $cadaContato);
    }

    $sucesso = "Contato excluído com sucesso!";
    include 'telas/mensagem.php';

}

function editCadastro(){

    $id = $_GET['id'];
    $contatos = file('crud/dados/contatos.csv');

    if($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        //exclui arquivo
        unlink('crud/dados/contatos.csv');
        //escreve arquivo
        $arquivo = fopen('crud/dados/contatos.csv', 'a+');
        //escreve arquivo
        foreach ($contatos as $cadaContato){
            fwrite($arquivo, $cadaContato);
        }
        fclose($arquivo);

        $sucesso = "Contato atualizado com sucesso!";
        include 'telas/mensagem.php';

    }
    $dados = explode(';', $contatos[$id]);
    
    include 'telas/editar.php';
    
}

?>