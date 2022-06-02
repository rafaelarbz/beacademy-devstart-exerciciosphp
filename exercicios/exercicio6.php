<select>
    <option selected>Dia</option>
    <?php 

        for ( $dia = 1; $dia <= 31; $dia ++){
            echo "<option>$dia</option>";
        }
    ?>
</select>

<select>
    <option selected>Mes</option>
    <?php 

        $arrayMeses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio' , 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro','Dezembro'];
        for ( $mes = 0; $mes <= 11; $mes ++){
            $nomeMes = $arrayMeses[$mes];
            echo "<option>$nomeMes</option>";
        }
    ?>
</select>