<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/1246aa0916.js"></script>
    <title>Listagem de Produtos</title>
</head>

<body>

    <?php
    session_start();
    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    include 'conexao.php';

    $sql = "SELECT acesso FROM usuarios WHERE email = '$usuario' AND status = 'Ativo'";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $acesso = $array['acesso'];
    ?>

    <div class="container" style="margin-top: 40px">

        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Número Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM estoque";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $numero = $array['numero'];
                $nome = $array['nome'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

                ?>
                <tr>
                    <td><?php echo $numero ?></td>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $quantidade ?></td>
                    <td><?php echo $fornecedor ?></td>
                    <td>
                        <?php
                        if (($acesso == 1) || ($acesso == 3)) {

                            ?>
                            <a class="btn btn-warning btn-sm" style="color: #ffffff" href="editarProduto.php?id=<?php echo $id ?>" role="button"> <i class="far fa-edit"></i> Editar</a>
                        <?php
                        }

                        if ($acesso == 1) {
                            ?>
                            <a class="btn btn-danger btn-sm" style="color: #ffffff" href="deletarProduto.php?id=<?php echo $id ?>" role="button"> <i class="far fa-trash-alt"></i></i> Deletar</a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>

    </div>
    <script type="js/bootstrap.js"></script>
</body>

</html>