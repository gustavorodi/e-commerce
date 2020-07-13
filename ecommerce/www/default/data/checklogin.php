<?php
    require_once("../data/connect.php");

    $baseclass = new BaseClass;
    $verifyUser = $baseclass->seach("SELECT 1 FROM USER WHERE EMAIL = '".$_POST['loginuser']."' AND SENHA = '".$_POST['passworduser']."'");
    // if ($verifyUser != null) {
        // while($res = $verifyUser->fetchArray()){
            // $temp = $baseclass->setLogado(1);
        // }
    // }
    echo (($verifyUser->fetchArray() == true) ? 1 : 2);