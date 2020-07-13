<?php
    require_once("../data/connect.php");

    // $_POST = array_merge($_POST , [
    //     "nameuser" => "1",
    //     "loginuser" => "12",
    //     "passworduser" => "3",
    //     "passworduserverify" => "3",
    // ]);

    $baseclass = new BaseClass;
    $newUser = 1;
    if ($_POST['passworduserverify'] == $_POST['passworduser']) {
        $verifyUser = $baseclass->seach("SELECT 1 FROM USER WHERE EMAIL = '".$_POST['loginuser']."'"); 
        if (($verifyUser->fetchArray() != true)) {
            $baseclass->insetUser( $_POST['nameuser'], $_POST['loginuser'], $_POST['passworduser'], 1); 
        } 
     }


    