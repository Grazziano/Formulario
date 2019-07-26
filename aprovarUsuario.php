<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/1246aa0916.js"></script>
    <title>Aprovar Usuário</title>
</head>

<body>
    <div class="container" style="margin-top: 40px">

        <div style="text-align: right">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h3>Lista de Categorias</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Usuário</th>
                    <th scope="col">E-mail Usuário</th>
                    <th scope="col">Nível de Acesso</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM usuarios WHERE status= 'Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $nome = $array['nome'];
                $mail = $array['email'];
                $acesso = $array['acesso'];

                ?>
                <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $mail ?></td>
                    <td><?php echo $acesso ?></td>


                    <td>
                        <a class="btn btn-success btn-sm" style="color: #ffffff" href="aprovarCadastro.php?id=<?php echo $id ?>&acesso=1" role="button"> <i class="far fa-thumbs-up"></i> Administrador</a>
                        <a class="btn btn-warning btn-sm" style="color: #ffffff" href="aprovarCadastro.php?id=<?php echo $id ?>&acesso=2" role="button"> <i class="far fa-thumbs-up"></i> Funcionário</a>
                        <a class="btn btn-dark btn-sm" style="color: #ffffff" href="aprovarCadastro.php?id=<?php echo $id ?>&acesso=3" role="button"> <i class="far fa-thumbs-up"></i> Gerente</a>
                        <a class="btn btn-danger btn-sm" style="color: #ffffff" href="deletarUsuario.php?id=<?php echo $id ?>&acesso=<?php echo $acesso ?>" role="button"> <i class="far fa-trash-alt"></i> Deletar</a>
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