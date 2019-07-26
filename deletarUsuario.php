<?php
include 'conexao.php';
$id = $_GET['id'];

$deletar = "DELETE FROM usuarios WHERE id = $id";
$fila = mysqli_query($conexao, $deletar);

header("Location: aprovarUsuario.php"); // Redireciona para página de aprovação
