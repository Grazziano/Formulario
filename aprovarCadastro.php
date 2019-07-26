<?php
include 'conexao.php';

$id = $_GET['id'];
$acesso = $_GET['acesso'];

if ($acesso == 0) {
    $update = "UPDATE usuarios SET status='Ativo', acesso=1 WHERE id=$id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "ADMINISTRADOR APROVADO";
}
if ($acesso == 2) {
    $update = "UPDATE usuarios SET status='Ativo', acesso=2 WHERE id=$id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "USUARIO APROVADO";
}
if ($acesso == 3) {
    $update = "UPDATE usuarios SET status='Ativo', acesso=3 WHERE id=$id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "GERENTE APROVADO";
}
