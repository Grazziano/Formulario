<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Inserir Categoria</title>

    <style type="text/css">
        #botao {
            background-color: #349fcd;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 40px; width: 500px">

        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h4>Cadastro de Categoria</h4>
        <form action="inserirCategoria.php" method="post">
            <label>Categoria</label>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Nome da Categoria" autocomplete="off">
            </div>
            <div style="text-align: right">
                <button type="submit" id="botao" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
    <script type="js/bootstrap.js"></script>
</body>

</html>