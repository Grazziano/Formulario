<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <form>
            <div class="form-group">
                <label>Número do produto</label>
                <input type="number" class="form-control" placeholder="Insira o número do produto">
            </div>
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" placeholder="Insira o nome do produto">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" placeholder="Insira a quantidade do produto">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                    <option>Outros</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                    <option>Fornecedor E</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

    <script type="js/bootstrap.js"></script>
</body>

</html>