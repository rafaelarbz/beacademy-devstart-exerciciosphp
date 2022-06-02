<ul>
    <?php
    
        $arrayFrutas = [
            'Banana', 
            'Laranja', 
            'Manga', 
            'Morango', 
            'Abacaxi'
        ];
        $tamanhoArray = count($arrayFrutas);
        for ($value = 0; $value < $tamanhoArray; $value ++){
            $nomeFruta = $arrayFrutas[$value];
            echo "<li>$nomeFruta</li>";
        }
    ?>
</ul>