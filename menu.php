<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Menu</title>
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

        <div class="row">

            <?php

            if (($acesso == 1) || ($acesso == 3)) {

                ?>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Produto</h5>
                            <p class="card-text">Opção para adicionar produtos no estoque.</p>
                            <a href="adicionarProduto.php" class="btn btn-primary">Cadastrar Produto</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar e excluir produtos.</p>
                        <a href="listarProdutos.php" class="btn btn-primary">Listar Produtos</a>
                    </div>
                </div>
            </div>
      
            <div class="col-sm-6" style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Adicionar categoria de produto.</p>
                        <a href="adicionarCategoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedor</h5>
                        <p class="card-text">Adicionar fornecedores.</p>
                        <a href="adicionarFornecedor.php" class="btn btn-primary">Cadastrar Fornecedor</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Usuários</h5>
                        <p class="card-text">Aprovar usuários cadastrados.</p>
                        <a href="cadastroUsuario.php" class="btn btn-primary">Cadastrar Usuário</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar Usuários</h5>
                        <p class="card-text">Aprovar usuários cadastrados.</p>
                        <a href="aprovarUsuario.php" class="btn btn-primary">Aprovar Usuários</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="js/bootstrap.js"></script>
</body>

</html>