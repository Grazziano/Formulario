<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/1246aa0916.js"></script>
    <title>Listagem de Categorias</title>
</head>

<body>
    <div class="container" style="margin-top: 40px; width: 500px">

        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h3>Lista de Categorias</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Categoria</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM categoria";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $nome = $array['categoria'];

                ?>
                <tr>
                    <td><?php echo $nome ?></td>

                    <td><a class="btn btn-warning btn-sm" style="color: #ffffff" href="editarCategoria.php?id=<?php echo $id ?>" role="button"> <i class="far fa-edit"></i> Editar</a>
                        <a class="btn btn-danger btn-sm" style="color: #ffffff" href="deletarCategoria.php?id=<?php echo $id ?>" role="button"> <i class="far fa-trash-alt"></i></i> Deletar</a></td>
                </tr>
            <?php
            }
            ?>

        </table>

    </div>
    <script type="js/bootstrap.js"></script>
</body>

</html>