<?php
    require_once("../header/header.php");

    $haveError = false;
    if (!empty($_REQUEST['err'])) {
        $haveError = true;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro - purple.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="shortcut icon" href="img/icone.ico.png" >
  <link rel="stylesheet" href="css/cadastrocliente.css">
  <script>
    function setParams() {
        var name = document.getElementsByName('login')[0].value;
        var login = document.getElementsByName('email')[0].value;
        var password = document.getElementsByName('senha')[0].value;
        var passwordVerify = document.getElementsByName('senhaverificada')[0].value;

        // debugger
        $.ajax({
            method: "post",
            url: "../data/createprod.php",
            data: {
                "nameuser": name,
                "loginuser": login,
                "passworduser": password,
                "passworduserverify": passwordVerify,
            },
            success: function(data){
            }
        });

        $.ajax({
            method: "post",
            url: "../data/verifyuser.php",
            data: {
                "loginuser": login,
            },
        success: function(data2){
            if (data2 == 1) {
                window.location.assign("../produtos/produtos.php");                
            } else {
                window.location.assign("../cadastrocliente/cadastroliente.php?err=1");
            }
        }
        });

        
    }
  </script>
</head>
<body>
    <form class="form" action="">
        <div class="card">
          <div class="card-top">
            <img class="imglogin" src="img/usuario.png" alt="">
            <h2 class="title">Ainda não é cadastrado?</h2>
            <p>Crie aqui a sua conta e inicie suas compras!</p>
            <?php
                if ($haveError) {
                    $info = "<p>Email já cadastrado ou senha não confere</p>";
                    echo $info;
                }

            ?>
          </div>
          <div class="card-group">
            <label>Nome do usuário</label>
            <input type="text" name="login" placeholder="Digite seu nome">
          </div>
          <div class="card-group">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="Digite seu e-mail que irá utilizar para acesso">
          </div>
          <div class="card-group">
            <label>Crie sua senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha">
          </div>
          <div class="card-group">
            <label>Confirma sua senha</label>
            <input type="password" name="senhaverificada" placeholder="Confirme sua senha">
          </div>
          <div class="card-group">
            <button type="submit" onclick="setParams()">Criar</button>
          </div>
          <div class="mid">
            <p>ou</p>  
          </div>
          <div class="autentication">
            <p>Cadastre-se pelo Google logo abaixo</p>  
          </div>
        </div>
    </form>
</body>
</html>