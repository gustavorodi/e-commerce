<?php
    require_once("../data/connect.php");

    // $_POST = array_merge($_POST , [
    //     "nameprod" => "teste 1",
    //     "precoprod" => "28.69",
    //     "descricaoprod" => "teste 3",
    //     "tipoprod" => "calcas",
    //     "imgprod" => "calcabranca"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "teste 1",
    //     "precoprod" => "28.69",
    //     "descricaoprod" => "teste 3",
    //     "tipoprod" => "calcas",
    //     "imgprod" => "calcapreta"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "teste 1",
    //     "precoprod" => "28.69",
    //     "descricaoprod" => "teste 3",
    //     "tipoprod" => "camisa",
    //     "imgprod" => "camisetabranca"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "Tênis customizado",
    //     "precoprod" => "180.65",
    //     "descricaoprod" => "Novo modelo - Coleção 2020",
    //     "tipoprod" => "calcados",
    //     "imgprod" => "tenisbranco"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "teste 1",
    //     "precoprod" => "28.69",
    //     "descricaoprod" => "teste 3",
    //     "tipoprod" => "camisa",
    //     "imgprod" => "camisetacinza"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "Camiseta estilizada",
    //     "precoprod" => "39.99",
    //     "descricaoprod" => "Novo modelo - Coleção 2020",
    //     "tipoprod" => "camisa",
    //     "imgprod" => "camisetaroxa"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "Camiseta estilizada",
    //     "precoprod" => "39.99",
    //     "descricaoprod" => "Novo modelo - Coleção 2020",
    //     "tipoprod" => "camisa",
    //     "imgprod" => "camisetaroxa2"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "Colar de ouro branco",
    //     "precoprod" => "500.00",
    //     "descricaoprod" => "Novo modelo - Coleção 2020",
    //     "tipoprod" => "acessorios",
    //     "imgprod" => "colarprata"
    // ]);
    
    // $_POST = array_merge($_POST , [
    //     "nameprod" => "Moleton Irado",
    //     "precoprod" => "79.99",
    //     "descricaoprod" => "Novo modelo - Coleção 2020",
    //     "tipoprod" => "moletons",
    //     "imgprod" => "moletombranco"
    // ]);

    $baseclass = new BaseClass;

    $baseclass->insetProduto($_POST['nameprod'], $_POST['precoprod'], $_POST['descricaoprod'], $_POST['tipoprod'], $_POST['imgprod']); 
    



    