<?php

//Tabela de Produtos

$array1 = [
    'nome' => 'Banana',
    'preco' => '5.42',
    'descricao' => 'Banana Prata kg',
    'foto' => "<img width='100px' src=banana.jpg>",

];

$array2 = [
    'nome' => 'Pitaia',
    'preco' => '8.24',
    'descricao' => 'Pitaia Kg',
    'foto' => "<img width='100px' src=pitaia.jpg>",

];

$array3 = [
    'nome' => 'Manga',
    'preco' => '6.27',
    'descricao' => ' Manga Tommy Kg',
    'foto' => "<img width='100px' src=manga.jpg>",

];

$array4 = [
    'nome' => 'Mamão',
    'preco' => '4.57',
    'descricao' => 'Mamão Papaia kg',
    'foto' => "<img width='100px' src=mamao.jpg>",
];

$array5 = [
    'nome' => 'Melancia',
    'preco' => '2.78',
    'descricao' => 'Melancia Kg',
    'foto' => "<img width='100px' src=melancia.jpg>",
];


$arrayAlunos = [
    $array1,
    $array2,
    $array3,
    $array4,
    $array5,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Produtos</h1>
    <table class="table table-hover mt-5">
        <thead class="table-dark" style="text-align:center;">
            <tr>
                <th>Produto</th>
                <th>Informações</th>
                <th>Preço</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">

            <?php
            foreach ( $arrayAlunos as $aluno){

                echo '<tr>';

                    echo'<td>' . $aluno['nome'] . '</td>';
                    echo'<td>' . $aluno['descricao'] . '</td>';
                    echo'<td> R$ ' . $aluno['preco'] . '</td>';
                    echo'<td>' . $aluno['foto'] . '</td>';
                
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
</div>
