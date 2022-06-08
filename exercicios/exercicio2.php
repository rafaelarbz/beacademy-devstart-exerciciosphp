<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lista HTML com PHP</title>
  </head>

  <body class="sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid mt-3">

                    <div>
                        <nav class="navbar navbar-warning bg-warning">
                            <span class="navbar-text">
                                <h3>Mercado</h3>
                            </span>
                        </nav>
                    </div>
                    <br/>
                    <div class="row" style="text-align: center;">

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Produtos</h5>
                                    <!-- Checkbox com Lista de Produtos -->
                                    <form action="" method="post"> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Banana">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Banana">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Maçã">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Maçã">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Melancia">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Melancia">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Laranja">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Laranja">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Melão">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Melão">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Pitaia">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Pitaia">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" name="produtos[]" aria-label="Checkbox for following text input" value="Morango">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Morango">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox"  name="produtos[]" aria-label="Checkbox for following text input" value="Ameixa">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Ameixa">
                                                    </div>
                                                </div>
                                            </div> <!-- end row checkbox -->
                                            <input  type="submit" class="btn btn-outline-warning" value="Adicionar a Lista">
                                        </div><!-- end div checkbox -->
                                    </form><!-- end form checkbox -->
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div>
                                <div class="navbar navbar-light bg-light">
                                    <span class="navbar-text">
                                        <h3>Lista de Compras</h3>
                                    </span>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">🛒</th>
                                    <th scope="col">Produtos</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                    if(!empty($_POST['produtos']) && count($_POST['produtos']) ){

                                        $produtosAdicionados = $_POST['produtos'];

                                        foreach($produtosAdicionados as $value){

                                            $nomeProduto = $value;

                                            echo "<tr>
                                            <th scope='row'>1</th>
                                            <td>$nomeProduto</td>
                                            </tr>" ;
                                        }

                                    }
                                    else{

                                        echo '<tr>
                                        <th scope="row">🙁</th>
                                        <td>Você não adicionou nenhum item na sua lista!</td>
                                        </tr>' ;
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div><!-- container-fluid -->
            </section>
        </div><!-- content-wrapper -->
    </div><!-- wrapper -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>