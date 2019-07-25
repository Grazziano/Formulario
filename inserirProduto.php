<?php
include 'conexao.php';

$nroProduto = $_POST['nroProduto'];
$nome = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO estoque (numero, nome, categoria, quantidade, fornecedor) 
VALUES ($nroProduto, '$nome', '$categoria', $quantidade, '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Produto Adicionado com Sucesso!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="adicionarProduto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        </center>
    </div>
</div>