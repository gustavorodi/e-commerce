<?php
    require_once("../data/connect.php");

    $baseclass = new BaseClass;
    $verifyUser = $baseclass->seach("SELECT 1 FROM USER WHERE EMAIL = '".$_POST['loginuser']."'"); 
    echo (($verifyUser->fetchArray() != true) ? 1 : 1);