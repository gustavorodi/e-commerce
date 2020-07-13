<?php
    require_once("../header/header.php");
    require_once("../data/connect.php");
    
    $baseclass = new BaseClass;
    if (!empty($_REQUEST['tipo'])) {
        $SQL =  $baseclass->seach("SELECT * FROM PRODUTO WHERE TIPO = '".$_REQUEST['tipo']."'");
    } else {
        $SQL = null;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Produtos - purple.</title>
    <link rel="shortcut icon" href="img/icone.ico.png">
    <link rel="shortcut icon" href="img/icone.ico.png">
    <link rel="stylesheet" href="css/produtos.css">
    <script>
        function setCarinho(id){
            $.ajax({
            method: "post",
            url: "../data/createuser.php",
            data: {
                "id":id,
            },
            success: function(data) {}
        });
        }
    </script>
</head>
<body>
    <nav id="menu">
        <ul>
            <li><a href="../produtos/produtos.php?tipo=camisa">Camisas</a></li>
            <li><a href="../produtos/produtos.php?tipo=moletons">Moletons</a></li>
            <li><a href="../produtos/produtos.php?tipo=calcas">Calças</a></li>
            <li><a href="../produtos/produtos.php?tipo=calcados">Calçados</a></li>
            <li><a href="../produtos/produtos.php?tipo=acessorios">Acessorios</a></li>
        </ul>
    </nav>
    <?php
        if ($SQL != null) {
            while($res = $SQL->fetchArray()){
        echo '
        <div class="grid-container">
        <div class="item1">
            <img class="card-img-top" src="../artes/'.$res['IMG'].'.png" alt="Imagem produto">
        </div>
        <div class="item2">
            <h3 class="card-title">'.$res['NAME'].'</h3>
            <p class="card-text">'.$res['DESCRICAO'].
            '</p>
        </div>  
        <div class="item3">
            <p class="card-price">R$'.$res['PRECO'].'</p>
        </div>
        <div class="item4">
            <button class="button" type="submit" action="setCarinho('.$res['ID'].')">Carrinho</button>
        </div>
        <div class="item5">
            <button class="button" type="submit">Comprar</button>
        </div>
    </div>';
        }
    }
    ?>
</body>

</html>