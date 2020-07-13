<?php
        require_once("../data/connect.php");
        $baseclass = new BaseClass;

        $returned_set = $baseclass->seach('SELECT * FROM USER');
        // $returned_set = $baseclass->seach('SELECT * FROM PRODUTO');
        // $returned_set = $baseclass->seach('SELECT * FROM CARINHO');
        // $returned_set = $baseclass->seach('SELECT * FROM LOGADO');

        while($res = $returned_set->fetchArray()){
            var_dump( $res);
            echo $res['NAME'];
        }

        // return $returned_set->fetchArray();

        // $baseclass->insetCarrinho(1,1);