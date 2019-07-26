<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>

    <style>
        #tamanho {
            width: 350px;
            margin-top: 50px;
            border-radius: 15px;
            border: 2px solid #f3f3f3;
            -webkit-box-shadow: 10px 10px 52px 17px rgba(122, 122, 122, 1);
            -moz-box-shadow: 10px 10px 52px 17px rgba(122, 122, 122, 1);
            box-shadow: 10px 10px 52px 17px rgba(122, 122, 122, 1);
        }

        img {
            width: 125px;
            height: 125px;
        }
    </style>
</head>

<body>
    <div class="container" id="tamanho">
        <div style="padding: 10px">
            <center>
                <img src="img/iconfinder_unlock_1287508.png" alt="">
            </center>
            <form action="index1.php" method="post">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" require>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" require>
                </div>

                <div style="text-align: right">
                    <button type="submit" class="btn btn-sm btn-success">Entrar</button>
                </div>
            </form>

        </div>
    </div>

    <div style="margin-top: 10px">
        <center>
            <small>Você não possui cadastro? Clique <a href="cadastroUsuarioExterno.php">aqui</a>!</small>
        </center>
    </div>

    <script type="js/bootstrap.js"></script>
</body>

</html>