<form action="" method="post">

    <h4>Calculadora Básica</h4>
    <input name="n1" type="text" placeholder="Numero 1"><br/>

    <input name="n2" type="text" placeholder="Numero 2"><br/>

    <button name="somar">Somar</button>
    <button name="subtrair">Subtrair</button>
    <button name="multiplicar">Multiplicar</button>
    <button name="dividir">Dividir</button>

</form>
<?php
    if ($_POST){

        if (isset($_POST['somar'])){
            echo $_POST['n1'] + $_POST['n2'];
        }
        if (isset($_POST['subtrair'])){
            echo $_POST['n1'] - $_POST['n2'];
        }
        if (isset($_POST['multiplicar'])){
            echo $_POST['n1'] * $_POST['n2'];
        }
        if (isset($_POST['dividir'])){
            echo $_POST['n1'] / $_POST['n2'];
        }

    }
?>
