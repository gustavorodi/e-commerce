<?php
    require_once("../header/header.php");
    require_once("../data/connect.php");
    
    $baseclass = new BaseClass;
    $SQL =  $baseclass->seach("SELECT * FROM PRODUTO WHERE TIPO = 'calcas'");

    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Carrinho - purple.</title>
    <link rel="shortcut icon" href="img/icone.ico.png">
    <link rel="shortcut icon" href="img/icone.ico.png">
    <link rel="stylesheet" href="css/carrinho.css">
</head>

<body>
    <form class="form" action="">
        <div class="card">
            <div class="card-top">
                <h2 class="title">Carrinho de compras</h2>
            </div>
        </div>
    </form>
    <?php
    if ($SQL != null) {
       while($res = $SQL->fetchArray()){
            echo ' <div class="grid-container">
                    <div class="item1">
                        <img class="card-img-top" src="../artes/'.$res['IMG'].'.png" alt="Imagem produto">
                    </div>
                    <div class="item2">
                        <h3 class="card-title">'.$res['NAME'].'</h3>
                    </div>  
                    <div class="item3">
                        <p class="card-price">R$'.$res['PRECO'].'</p>
                    </div>
                    <div class="item4">
                        <button class="button" type="submit">Remover</button>
                    </div>
                </div>';
        }
    }
   ?>
</body>
</html>