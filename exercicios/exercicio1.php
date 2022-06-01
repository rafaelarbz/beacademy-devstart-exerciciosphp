<form action="" method="post">

    <!-- Fazer uma calculadora -->

    <input name="n1" type="text" placeholder="Numero 1"><br/>

    <input name="n2" type="text" placeholder="Numero 2"><br/>

    <button>Enviar</button>

</form>
<?php
    if ($_POST){
        echo $_POST['n1'] + $_POST['n2'];
    }
?>
