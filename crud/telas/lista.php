<h1>Lista</h1>
<table class="table table-hover">
    <thead class="table-dark" style="text-align: center;">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody style="text-align: center;">
        <?php 
        foreach ($contatos as $posicao => $cadaContato){
            $infoContato = explode(';', $cadaContato);
            echo "
                <tr>
                    <td>" . $infoContato[0]. "</td>
                    <td>" . $infoContato[1]. "</td>
                    <td>" . $infoContato[2]. "</td>
                    <td>
                        <a href='/excluir?id={$posicao}' class='btn btn-sm btn-danger'>Excluir</a>
                        <a href='/editar?id={$posicao}' class='btn btn-sm btn-warning'>Editar</a>
                    </td>
                </tr>
            ";
        }
        
        
        ?>
    </tbody>
</table>