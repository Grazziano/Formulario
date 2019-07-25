<?php
include 'conexao.php';

echo $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Edição de Categoria</title>
    <link rel="icon" href="img/icons8-google-forms-32.png">
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #349fcd;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Formulário de Edição</h4>
        <form action="atualizarCategoria.php" method="post" style="margin-top: 20px">
            <?php
            $sql = "SELECT * FROM categoria WHERE id = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id = $array['id'];
                $nome = $array['categoria'];

                ?>

                <div class="form-group">
                    <label>Nome Categoria</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                    <input type="text" class="form-control" name="categoria" value="<?php echo $nome ?>">
                </div>

                <div style="text-align: right">
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
            <?php
            }
            ?>
        </form>
    </div>

    <script type="js/bootstrap.js"></script>
</body>

</html>