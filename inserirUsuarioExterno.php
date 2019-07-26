<?php
include 'conexao.php';
include 'script/password.php';

$nome = $_POST['nomeUsuario'];
$mail = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];
// $acesso = $_POST['nivelUsuario'];
$status = 'Inativo';
// senha pode ser md5 ou sha1
$sql = "INSERT INTO usuarios (nome, email, senha, status)
VALUES ('$nome','$mail', sha1('$senha'), '$status')";

$inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Usuário Adicionado com Sucesso, esperando aprovação!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="cadastroUsuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo usuário</a>
        </center>
    </div>
</div>