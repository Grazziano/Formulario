<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadastro</title>
</head>

<body>

    <div class="container" style="margin-top: 40px; width: 400px">
        <div style="text-align: right">
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <h4>Cadastro de Usuário</h4>
        <form action="inserirUsuario.php" method="post">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nomeUsuario" class="form-control" require autocomplete="off" placeholder="Nome Completo">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="mail" name="emailUsuario" class="form-control" require autocomplete="off" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input id="txtSenha" type="password" name="senhaUsuario" class="form-control" require autocomplete="off" placeholder="Senha">
            </div>
            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" name="senhaUsuario2" class="form-control" require autocomplete="off" placeholder="Repita a Senha" oninput="validaSenha(this)">
                <small>As senhas precisam ser iguais.</small>
            </div>
            <div class="form-group">
                <label>Nível de Acesso</label>
                <select name="nivelUsuario" class="form-control">
                    <optgroup>
                        <option value="1">Administrador</option>
                        <option value="2">Funcionário</option>
                        <option value="3">Gerente</option>
                    </optgroup>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>

    </div>


    <script type="js/bootstrap.js"></script>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('As senhas precisam ser iguais');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
</body>

</html>