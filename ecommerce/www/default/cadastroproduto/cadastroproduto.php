<?php
    require_once("../header/header.php");
    require_once("../data/connect.php");
    $baseclass = new BaseClass;
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Produtos - purple.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="img/icone.ico.png">
    <link rel="stylesheet" href="css/cadastroproduto.css">
    <script>
    function setParams() {
        var name = document.getElementsByName('nome')[0].value;
        var tipo = document.getElementsByName('tipo')[0].value;
        var preco = document.getElementsByName('preco')[0].value;
        var descricao = document.getElementsByName('descricao')[0].value;

        // debugger
        $.ajax({
            method: "post",
            url: "../data/createuser.php",
            data: {
                "nameprod": name,
                "tipoprod": tipo,
                "precoprod": preco,
                "descricaoprod": descricao,
            },
            success: function(data) {}
        });

    }
    </script>
</head>

<body>
    <form class="form" action="">
        <div class="card">
            <div class="card-top">
                <h2 class="title">Cadastre seu novo produto</h2>
            </div>
            <div class="card-group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Digite o nome do produto">
            </div>
            <div class="card-group">
                <label>Preço</label>
                <input type="text" name="preco" placeholder="Digite o preço">
            </div>
            <div class="card-group">
                <label>Tipo do produto</label>
                <input type="text" name="preco" placeholder="">
            </div>
            <div class="card-group">
                <label>Descrição</label>
                <textarea class="place" name="descricao" placeholder="Digite uma descrição"></textarea>
            </div>
            <div class="card-group-file">
                <input type="file" id="path" />
            </div>
            <div class="card-group">
                <button type="submit" onclick="setParams()">Cadastrar</button>
            </div>
        </div>
    </form>
</body>

</html>