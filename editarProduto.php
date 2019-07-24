<?php
include 'conexao.php';

$id = $_GET['id'];
?>

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
        <h4>Formulário de Cadastro</h4>
        <form action="atualizarProduto.php" method="post" style="margin-top: 20px">
            <?php
            $sql = "SELECT * FROM estoque WHERE id = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id = $array['id'];
                $numero = $array['numero'];
                $nome = $array['nome'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
                ?>
                <div class="form-group">
                    <label>Número do produto</label>
                    <input type="number" class="form-control" name="nroProduto" value="<?php echo $numero ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome do produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nome ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
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