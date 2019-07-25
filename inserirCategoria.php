<?php
include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (categoria) VALUES ('$categoria');";
$inserir = mysqli_query($conexao, $sql);
