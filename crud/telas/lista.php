<h1>Lista</h1>
<table class="table table-hover">
    <thead class="table-dark" style="text-align: center;">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody style="text-align: center;">
        <?php 
        foreach ($contatos as $cadaContato){
            $infoContato = explode(';', $cadaContato);
            echo "
                <tr>
                    <td>" . $infoContato[0]. "</td>
                    <td>" . $infoContato[1]. "</td>
                    <td>" . $infoContato[2]. "</td>
                </tr>
            ";
        }
        
        
        ?>
    </tbody>
</table>