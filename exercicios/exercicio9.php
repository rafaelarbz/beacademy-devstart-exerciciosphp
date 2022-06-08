<?php

$array1 = [
    'nome' => 'Chiquim',
    'email' => 'chiquim@mail.com',
    'telefone' => '55 8 8675-4231',
    'notas' => [
        8,
        6,
        7.5,
        8

    ]
];

$array2 = [
    'nome' => 'Maria',
    'email' => 'maria@mail.com',
    'telefone' => '55 8 2456-7817',
    'notas' => [
        7,
        8,
        7.5,
        8

    ]
];

$array3 = [
    'nome' => 'Zezim',
    'email' => 'zezim@mail.com',
    'telefone' => '55 8 8675-4231',
    'notas' => [
        8,
        6,
        7.5,
        8

    ]
];

$array4 = [
    'nome' => 'Luiza',
    'email' => 'luiza@mail.com',
    'telefone' => '55 8 2456-7817',
    'notas' => [
        7,
        8,
        7.5,
        8

    ]
];

$arrayAlunos = [
    $array1,
    $array2,
    $array3,
    $array4,
]

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ( $arrayAlunos as $aluno){

                echo '<tr>';

                    echo'<td>' . $aluno['nome']. '</td>';
                    echo'<td>' . $aluno['email']. '</td>';
                    echo'<td>' . $aluno['telefone']. '</td>';
                
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
</div>
