<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhaUsuario = $_POST['senha'];
// $senhaUsuario = sha1($_POST['senha']);

$sql = "SELECT email, senha FROM usuarios WHERE email='$usuario' AND status = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar); // Busca quantas linha com o e-mail tem no banco

while ($array = mysqli_fetch_array($buscar)) {
    $senha = $array['senha'];

    $senhaDecodificada = sha1($senhaUsuario);

    if ($total > 0) {

        if ($senhaDecodificada == $senha) {

            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: menu.php');
        } else {
            header('Location: erro.php');
        }
    } else {
        header('Location: erro.php');
    }
}
