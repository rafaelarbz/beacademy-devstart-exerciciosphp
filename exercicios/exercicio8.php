<table>
  <tr>
    <th>Produtos</th>
    <th>Qtd</th>
  </tr>
  <?php

    $arrayProdutos = [
        ['Banana', 5],
        ['Manga', 3],
        ['Kiwi', 7],
        ['Ameixa', 12],
    ];

    $tamanhoArray = count($arrayProdutos);
    for ($value = 0; $value < $tamanhoArray; $value ++){
        $produto = $arrayProdutos[$value][0];
        $quantidade = $arrayProdutos[$value][1];
            echo "<tr>
            <th>$produto</th>
            <th>$quantidade</th>
            </tr>";
    }


  ?>
</table>