<?php
include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor (fornecedor) VALUES ('$fornecedor');";
$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px">
    <center>
        <h3>Adicionado com sucesso!</h3>
        <div style="margin-top: 10px">
            <a href="adicionarFornecedor.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
        </div>
    </center>
</div>