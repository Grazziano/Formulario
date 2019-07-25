<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Cadastro</title>
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

        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h4>Formulário de Cadastro</h4>
        <form action="inserirProduto.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Número do produto</label>
                <input type="number" class="form-control" name="nroProduto" placeholder="Insira o número do produto" required>
            </div>
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">

                    <?php
                    include 'conexao.php';

                    $sql = "SELECT * FROM categoria order by categoria ASC";
                    $buscar = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($buscar)) {
                        $id = $array['categoria.id'];
                        $nome = $array['categoria'];
                        ?>

                        <option><?php echo $nome ?></option>

                    <?php
                    }
                    ?>

                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                    <option>Fornecedor E</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

    <script type="js/bootstrap.js"></script>
</body>

</html>