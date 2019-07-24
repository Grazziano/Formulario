<?php
include 'conexao.php';

$id = $_POST['id'];
// $numero = $_POST['nroNumero'];
$nome = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE estoque SET nome='$nome', categoria='$categoria', 
quantidade='$quantidade', fornecedor='$fornecedor'
WHERE id=$id";

$atualizar = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso!</h3>
        <a href="listarProdutos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
    </center>
</div>