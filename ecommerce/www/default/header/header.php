<?php
    // require_once("../data/connect.php");
    // $baseclass = new BaseClass;
    // $returned_set = $baseclass->seach('SELECT * FROM LOGADO');
?>


<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/header/img/icone.ico.png">
    <link rel="shortcut icon" href="/header/img/icone.ico.png" >
    <link rel="stylesheet" href="/header/css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    
    </script>
</head>

<body class="body">
    <div class="header">
        <img class="imglogin" src="/header/img/icone.ico.png" alt="">
        <div class="header-right">
            <a href="../produtos/produtos.php?tipo=">Produtos</a>
            <a href="../cadastroproduto/cadastroproduto.php">Cadastro de produto</a>
            <a href="../quemsomos/quemsomos.php">Quem somos?</a>
            <a  href="../login/login.php">Login/Cadastro</a>
            <a class="active" href="../carrinho/carrinho.php">Meu carrinho</a>
            <?php
            // if ($returned_set->fetchArray()) {
            // while($res = $returned_set->fetchArray()){
            //     echo '<a class="active" href="#meucarrinho">Meu carrinho</a>';
            // }
            // } else {
            //     echo '<a class="active" href="../login/login.php">Login/Cadastro</a>';
            // }
            ?>
        </div>
    </div>

</html>