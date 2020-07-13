<?php
    require_once("../header/header.php");
    $isError = false;
    if (!empty($_REQUEST['err'])) {
        $isError = true;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Login - purple.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="shortcut icon" href="img/icone.ico.png" >
  <link rel="stylesheet" href="css/login.css">
  <script>
    function getParams() {
      
        var login = document.getElementsByName('login')[0].value;
        var password = document.getElementsByName('password')[0].value;
        debugger
        $.ajax({
            method: "post",
            url: "../data/checklogin.php",
            data: {
              "loginuser": login,
              "passworduser": password,
            },
        success: function(data){
            if (data == 1) {
                window.location.assign("../produtos/produtos.php");                
            } else {
                window.location.assign("../login/login.php?err=1");
            }
        }
        });
    }
    
    function goPage() {
        window.location.assign("../cadastrocliente/cadastroliente.php");
    }

</script>
</head>
<body>
    <form class="form" action="">
        <div class="card">
          <div class="card-top">
            <img class="imglogin" src="img/logositeaproximado.png" alt="">
            <h2 class="title">Bem vindo!</h2>
            <p>Digite suas credenciais e boas compras</p>

            <?php
                if ($isError) {
                    $infoError = "
                        <p>Email ou Senha invalido</p>
                    ";

                    echo($infoError);
                }
            ?>
          </div>
          <div class="card-group">
            <label>Login</label>
            <input type="text" name="login" placeholder="Digite seu login">
          </div>
          <div class="card-group">
            <label>Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha">
          </div>
          <div class="card-group">
            <label><input type="checkbox">Lembre-me</label>
          </div>
          <div class="card-group">
            <button type="submit" onclick="getParams()">Acessar</button>
          </div>
          <div class="card-group">
            <button type="button" id="newuser" onclick="goPage()">Criar conta</button>
          </div>
          <div class="esqueci">
            <a href="../recuperacao/recuperacao.html">Esqueci a senha</a>
          </div>
          <div class="mid">
            <p>ou</p>  
          </div>
          <div class="autentication">
            <p>Entre pelo Google logo abaixo</p>  
          </div>
        </div>
    </form>
</body>
</html>