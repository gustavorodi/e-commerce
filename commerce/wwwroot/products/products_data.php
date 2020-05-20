<?php
    require_once("../templetes/templete.php")
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/products.css"></link>
</head>

<body>
    <div class="row" style="padding-top: 1%;">
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item">Camisas</li>
                <li class="list-group-item">Moletons</li>
                <li class="list-group-item">Calças</li>
                <li class="list-group-item">Calçados</li>
                <li class="list-group-item">Acessorios</li>
            </ul>
        </div>
        <div class="col-1"></div>
        <div class="card" style="width: 16rem;">
            <img src="img/logositeaproximado.png" class="card-img-bottom" alt="...">
            <div class="card-body">
                <h5 class="card-title">Calça</h5>
                <p class="card-text">Calça preta com detalhes em branco</p>
                <p class="card-text">R$</p>
                <div>
                    <button class="button" type="submit">Comprar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>